<?php

declare(strict_types=1);

namespace NunoMaduro\Larastan\ReturnTypes;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Str;
use NunoMaduro\Larastan\Methods\BuilderHelper;
use PhpParser\Node\Expr\StaticCall;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\ParametersAcceptorSelector;
use PHPStan\Type\DynamicStaticMethodReturnTypeExtension;
use PHPStan\Type\Generic\GenericObjectType;
use PHPStan\Type\IntegerType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\Type;

/**
 * @internal
 */
final class ModelDynamicStaticMethodReturnTypeExtension implements DynamicStaticMethodReturnTypeExtension
{
    /** @var BuilderHelper */
    private $builderHelper;

    /**
     * @param  BuilderHelper  $builderHelper
     */
    public function __construct(BuilderHelper $builderHelper)
    {
        $this->builderHelper = $builderHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getClass(): string
    {
        return Model::class;
    }

    /**
     * {@inheritdoc}
     */
    public function isStaticMethodSupported(MethodReflection $methodReflection): bool
    {
        $name = $methodReflection->getName();

        if ($name === '__construct') {
            return false;
        }

        // Another extension handles this case
        if (Str::startsWith($name, 'find')) {
            return false;
        }

        if (in_array($name, ['get', 'hydrate', 'fromQuery'], true)) {
            return true;
        }

        if (! $methodReflection->getDeclaringClass()->hasNativeMethod($name)) {
            return false;
        }

        $method = $methodReflection->getDeclaringClass()->getNativeMethod($methodReflection->getName());

        $returnType = ParametersAcceptorSelector::selectSingle($method->getVariants())->getReturnType();

        return (count(array_intersect([EloquentBuilder::class, QueryBuilder::class, Collection::class], $returnType->getReferencedClasses()))) > 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeFromStaticMethodCall(
        MethodReflection $methodReflection,
        StaticCall $methodCall,
        Scope $scope
    ): Type {
        $method = $methodReflection->getDeclaringClass()
            ->getMethod($methodReflection->getName(), $scope);

        $returnType = ParametersAcceptorSelector::selectSingle($method->getVariants())->getReturnType();

        if ((count(array_intersect([EloquentBuilder::class], $returnType->getReferencedClasses())) > 0)
            && $methodCall->class instanceof \PhpParser\Node\Name
        ) {
            $returnType = new GenericObjectType(
                $this->builderHelper->determineBuilderName($scope->resolveName($methodCall->class)),
                [new ObjectType($scope->resolveName($methodCall->class))]
            );
        }

        if (
            $methodCall->class instanceof \PhpParser\Node\Name
            && in_array(Collection::class, $returnType->getReferencedClasses(), true)
            && in_array($methodReflection->getName(), ['get', 'hydrate', 'fromQuery', 'all', 'findMany'], true)
        ) {
            $collectionClassName = $this->builderHelper->determineCollectionClassName($scope->resolveName($methodCall->class));

            return new GenericObjectType($collectionClassName, [new IntegerType(), new ObjectType($scope->resolveName($methodCall->class))]);
        }

        return $returnType;
    }
}
