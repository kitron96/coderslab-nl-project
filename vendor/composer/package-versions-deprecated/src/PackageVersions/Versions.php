<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'accentinteractive/laravel-logcleaner' => 'v1.1.0@ca1caa398a9a65d1cc60c3931925f4292523ab7e',
  'apimatic/jsonmapper' => 'v2.0.3@f7588f1ab692c402a9118e65cb9fd42b74e5e0db',
  'apimatic/unirest-php' => '2.3.0@52e226fb3b7081dc9ef64aee876142a240a5f0f9',
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.255.3@0530f0679d7b4809c9500c2332a4d7e9f770f47a',
  'bacon/bacon-qr-code' => '2.0.8@8674e51bb65af933a5ffaf1c308a660387c35c22',
  'barryvdh/laravel-dompdf' => 'v2.0.0@1d47648c6cef37f715ecb8bcc5f5a656ad372e27',
  'barryvdh/laravel-ide-helper' => 'v2.12.3@3ba1e2573b38f72107b8aacc4ee177fcab30a550',
  'barryvdh/laravel-translation-manager' => '0.6.4@bb8d8f5cffbead1fe8b115a4be8c0d1b9209680c',
  'barryvdh/reflection-docblock' => 'v2.1.0@bf44b757feb8ba1734659029357646466ded673e',
  'berkayk/onesignal-laravel' => 'v1.0.10@4b3bc2ff3376f5adb224948b759ccf052e3e6b7b',
  'billowapp/payfast' => '0.5.0@3912032abd18cf4f90890aa41ac774b4971100a2',
  'billowapp/show-me-the-money' => '0.4.3@70409331d4ca1cdcd458589cdbd12105f0bca599',
  'brick/math' => '0.10.2@459f2781e1a08d52ee56b0b1444086e038561e3f',
  'clue/stream-filter' => 'v1.6.0@d6169430c7731d8509da7aecd0af756a5747b78e',
  'composer/ca-bundle' => '1.3.4@69098eca243998b53eed7a48d82dedd28b447cd5',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/pcre' => '3.1.0@4bff79ddd77851fe3cdd11616ed3f92841ba5bd2',
  'composer/semver' => '3.3.2@3953f23262f2bff1919fc82183ad9acb13ff62c9',
  'craftsys/msg91-laravel' => 'v0.13.2@81f26b151e7582d0102d8b1ecd69ab5cb1fee98d',
  'craftsys/msg91-laravel-notification-channel' => 'v0.6.2@791f8c1286d4d2ca0d54718ced27dfde86d8612c',
  'craftsys/msg91-php' => 'v0.15.2@85e52b30078ef5eccffbe4c8577fc762e3b2878b',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/dbal' => '3.5.2@63e513cebbbaf96a6795e5c5ee34d205831bfc85',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dompdf/dompdf' => 'v2.0.1@c5310df0e22c758c85ea5288175fc6cd777bc085',
  'dragonmantank/cron-expression' => 'v3.3.2@782ca5968ab8b954773518e9e49a6f892a34b2a8',
  'edujugon/push-notification' => 'dev-master@cee8303bb5298183bdfefe70a06cbaea988fd0e1',
  'egulias/email-validator' => '3.2.1@f88dcf4b14af14a98ad96b14b2b317969eab6715',
  'eluceo/ical' => '0.16.1@7043337feaeacbc016844e7e52ef41bba504ad8f',
  'ezyang/htmlpurifier' => 'v4.16.0@523407fb06eb9e5f3d59889b3978d5bfe94299c8',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'froiden/envato' => '1.9.3@c4d26dd439a7a48d273ed50355963326c13990fa',
  'froiden/laravel-installer' => '1.6.5@c0256df51c605740f43b4ab0649e8b1afeeeca16',
  'froiden/laravel-rest-api' => '9.0.4@ba64767206dfe6e70c6f2092de3ee849bb42b157',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'fruitcake/php-cors' => 'v1.2.0@58571acbaa5f9f462c9c77e911700ac66f446d4e',
  'google/apiclient' => 'v2.13.0@b653a338c5a658adf6df4bb2f44c2cc02fe7eb1d',
  'google/apiclient-services' => 'v0.280.0@ce774773c6e11510145ce1db4c333017298599c5',
  'google/auth' => 'v1.24.0@1f8cff5aa324700d041efd2df1a0855112a2e7ae',
  'google/cloud-core' => 'v1.48.1@07f275bb0b915e5671edda16506366a67eab0916',
  'google/cloud-translate' => 'v1.12.10@8a197637b31bf902ea11f3df5b7904905e634804',
  'google/common-protos' => 'v3.1.0@5634c15f2ac5dbf2e3fd5ff7400d77661ab1b0d4',
  'google/gax' => 'v1.18.1@45e01473b7215d593a58a72c89225f110e9d2ce0',
  'google/grpc-gcp' => 'v0.2.1@899d0112812a812df7692617a59f4076f0d01719',
  'google/longrunning' => 'v0.2.2@a45f08bab4eacb185244adfc5db72f63900280f0',
  'google/protobuf' => 'v3.21.12@93019df2df0f8c5c01757ef79f3f077d2cb35b65',
  'graham-campbell/bounded-cache' => 'v2.1.0@ee07b861fbcc57706d4eb93ab23430d8b19db280',
  'graham-campbell/gitlab' => 'v6.0.0@0b79c8fc6a351b5a3d3afaa912008ed93a738092',
  'graham-campbell/manager' => 'v4.7.0@b4cafa6491b9c92ecf7ce17521580050a27b8308',
  'graham-campbell/markdown' => 'v14.0.0@36dc081ad00ee5abedff939cfccbfc5008eed8eb',
  'graham-campbell/result-type' => 'v1.1.0@a878d45c1914464426dc94da61c9e1d36ae262a8',
  'grpc/grpc' => '1.42.0@9fa44f104cb92e924d4da547323a97f3d8aca6d4',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '2.4.3@67c26b443f348a51926030c83481b85718457d3d',
  'http-interop/http-factory-guzzle' => '1.2.0@8f06e92b95405216b237521cc64c804dd44c4a81',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'jean85/pretty-package-versions' => '2.0.5@ae547e455a3d8babd07b96966b17d7fd21d9c6af',
  'kingflamez/laravelrave' => 'v4.4.0@67737d8ed3847efd5a66e88fa2f78fa07bf9c7ac',
  'laminas/laminas-diactoros' => '2.24.0@6028af6c3b5ced4d063a680d2483cce67578b902',
  'laravel-lang/lang' => '6.1.4@18a7845e813e737a56a7f164301d5014b536950c',
  'laravel-notification-channels/onesignal' => 'v2.4.0@3319787a7a5f4dbea588e594dcd419714cfd2155',
  'laravel-notification-channels/telegram' => '2.1.0@76299fa06f48cb175e17ea951ccf3b185329a1ac',
  'laravel-notification-channels/twilio' => '3.2.0@c14bafbd59d59aed94e73cb83d89c0d33ad88c79',
  'laravel/cashier' => 'v14.5.0@282e1013b59c800c1e91f8e33abc167c6860f8d5',
  'laravel/fortify' => 'v1.14.1@04b4b9c20e421c415d0427904a72e08a21bdec27',
  'laravel/framework' => 'v9.45.1@faeb20d3fc61b69790068161ab42bcf2d5faccbc',
  'laravel/helpers' => 'v1.5.0@c28b0ccd799d58564c41a62395ac9511a1e72931',
  'laravel/serializable-closure' => 'v1.2.2@47afb7fae28ed29057fdca37e16a84f90cc62fae',
  'laravel/slack-notification-channel' => 'v2.4.0@060617a31562c88656c95c5971a36989122d4b53',
  'laravel/socialite' => 'v5.5.6@1cd1682b709b8808a5b5dbb68179a58d1342aa7b',
  'laravel/tinker' => 'v2.7.3@5062061b4924af3392225dd482ca7b4d85d8b8ef',
  'laravel/vonage-notification-channel' => 'v3.0.0@c1245b19bfa3c6f7a45ef103c6bbc3437b76040a',
  'laravelcollective/html' => 'v6.3.0@78c3cb516ac9e6d3d76cad9191f81d217302dea6',
  'lcobucci/clock' => '2.2.0@fb533e093fd61321bfcbac08b131ce805fe183d3',
  'lcobucci/jwt' => '4.2.1@72ac6d807ee51a70ad376ee03a2387e8646e10f3',
  'league/commonmark' => '2.3.8@c493585c130544c4e91d2e0e131e6d35cb0cbc47',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/flysystem' => '3.12.0@2aef65a47e44f2d6f9938f720f6dd697e7ba7b76',
  'league/flysystem-aws-s3-v3' => '3.10.3@f593bf91f94f2adf4f71513d29f1dfa693f2f640',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth1-client' => 'v1.10.1@d6365b901b5c287dd41f143033315e2f777e1167',
  'league/oauth2-client' => '2.6.1@2334c249907190c132364f5dae0287ab8666aa19',
  'm4tthumphrey/php-gitlab-api' => '11.8.0@38380c933ada8fd2099bc611f0de23c339cdb04a',
  'maatwebsite/excel' => '3.1.45@80627071a8cebb3c1119f1d2881bb6a03a8f9152',
  'macellan/laravel-zip' => '1.0.5@0c40d22de710acb5e4da8620663fb336741cdc5d',
  'macsidigital/laravel-api-client' => '4.0.2@a49dbe7c88b6edf29624bab06dd31d5a8b7faa63',
  'macsidigital/laravel-oauth2-client' => '2.0.2@64a4d1dad3f760d4ee9d5a72b3238a843ca366e2',
  'macsidigital/laravel-zoom' => '5.0.3@cfc10998bc401e5e4463ae11aaa3c3adbfba4a47',
  'maennchen/zipstream-php' => 'v2.4.0@3fa72e4c71a43f9e9118752a5c90e476a8dc9eb3',
  'markbaker/complex' => '3.0.2@95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
  'markbaker/matrix' => '3.0.1@728434227fe21be27ff6d86621a1b13107a2562c',
  'masterminds/html5' => '2.7.6@897eb517a343a2281f11bc5556d6548db7d93947',
  'mitchbred/entrust' => '2.1@b13b5839b47a4834ba29fdfea2e9f8b0d7d53204',
  'mollie/laravel-mollie' => 'v2.21.1@5fa08188d67153c407f42b2004658b38ee4fa9aa',
  'mollie/mollie-api-php' => 'v2.49.1@34ad0d291b9d394ce1199f166ca51d68f5e05ab3',
  'moneyphp/money' => 'v4.1.0@c8eeeb1f7b7e6ca95490b94a301dc9cb8cb76c2d',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/php-enum' => '1.8.4@a867478eae49c9f59ece437ae7f9506bfaa27483',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nesbot/carbon' => '2.64.0@889546413c97de2d05063b8cb7b193c2531ea211',
  'nette/schema' => 'v1.2.3@abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
  'nette/utils' => 'v3.2.8@02a54c4c872b99e4ec05c4aec54b5a06eb0f6368',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'nunomaduro/termwind' => 'v1.15.0@594ab862396c16ead000de0c3c38f4a5cbe1938d',
  'nwidart/laravel-modules' => 'v9.0.6@a31b003b9e1dd100d2bcf7da7e036a758d33986d',
  'nyholm/psr7' => '1.5.1@f734364e38a876a23be4d906a2a089e1315be18a',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.19.0@cb15e403ecbe6a6cc515f855c310eb6b1872a933',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'pcinaglia/laraupdater' => '1.0.3.2@50facee7f7492b237fe1d0a6b9d0ddf77b59b47e',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.5.0@76876c6cf3080bcb6f249d7d59705108166a6685',
  'php-http/cache-plugin' => '1.7.5@63bc3f7242825c9a817db8f78e4c9703b0c471e2',
  'php-http/client-common' => '2.6.0@45db684cd4e186dcdc2b9c06b22970fe123796c0',
  'php-http/discovery' => '1.14.3@31d8ee46d0215108df16a8527c7438e96a4d7735',
  'php-http/httplug' => '2.3.0@f640739f80dfa1152533976e3c112477f69274eb',
  'php-http/message' => '1.13.0@7886e647a30a966a1a8d1dad1845b71ca8678361',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/multipart-stream-builder' => '1.2.0@11c1d31f72e01c738bbce9e27649a7cca829c30e',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/type-resolver' => '1.6.2@48f445a408c131e38cab1c235aa6d2bb7a0bb20d',
  'phpoffice/phpspreadsheet' => '1.26.0@5b6ceea9705b068f993e268e4debc566c2637063',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'phpseclib/phpseclib' => '3.0.18@f28693d38ba21bb0d9f0c411ee5dae2b178201da',
  'pragmarx/google2fa' => 'v8.0.1@80c3d801b31fe165f8fe99ea085e0a37834e1be3',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '3.0.0@764e0b3939f5ca87cb904f570ef9be2d78a07865',
  'psy/psysh' => 'v0.11.10@e9eadffbed9c9deb5426fd107faae0452bf20a36',
  'pusher/pusher-php-server' => 'v4.1.5@251f22602320c1b1aff84798fe74f3f7ee0504a9',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.7.0@5ed9ad582647bbc3864ef78db34bdc1afdcf9b49',
  'razorpay/razorpay' => '2.8.5@31027cfb689b9480d67419dbec7c203097e9d9ac',
  'rize/uri-template' => '0.3.5@5ed4ba8ea34af84485dea815d4b6b620794d1168',
  'rmccue/requests' => 'v2.0.5@b717f1d2f4ef7992ec0c127747ed8b7e170c2f49',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'sentry/sdk' => '3.3.0@d0678fc7274dbb03046ed05cb24eb92945bedf8e',
  'sentry/sentry' => '3.12.0@4902f43640963ed45517fd7c1da7fdd5511bb304',
  'sentry/sentry-laravel' => '2.14.2@4538ed31d77868dd3b6d72ad6e5e68b572beeb9f',
  'spatie/db-dumper' => '3.3.0@129b8254b2c9f10881a754a692bd9507b09a1893',
  'spatie/laravel-backup' => '8.1.5@cf367fbe50ff3b1ae9a79638cc5ef66f3cc9c7fa',
  'spatie/laravel-cookie-consent' => '3.2.2@c7a9d87397bce8b1834d90fb5124bea036ff7358',
  'spatie/laravel-package-tools' => '1.13.8@781a2f637237e69c277eb401063acf15e2b4156b',
  'spatie/laravel-signal-aware-command' => '1.2.0@d15a5b69bf715fc557b7034b4abd5a1472ae7ec8',
  'spatie/temporary-directory' => '2.1.1@e2818d871783d520b319c2d38dc37c10ecdcde20',
  'square/square' => '16.0.0.20211117@d532628a0741b47695ac3714f442c09571d95f11',
  'stella-maris/clock' => '0.1.7@fa23ce16019289a18bb3446fdecd45befcdd94f8',
  'stichoza/google-translate-php' => 'v4.1.7@14f6a9c84cd860910706ee3a668fba8a0a1aac0f',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/cache' => 'v6.0.16@40cd2323c219e30292c0e2520572b54310e534c6',
  'symfony/cache-contracts' => 'v3.2.0@e8d1a5fc43534063204b74c080ebe36307d12271',
  'symfony/console' => 'v6.2.3@0f579613e771dba2dbb8211c382342a641f5da06',
  'symfony/css-selector' => 'v6.0.11@ab2746acddc4f03a7234c8441822ac5d5c63efe9',
  'symfony/deprecation-contracts' => 'v3.2.0@1ee04c65529dea5d8744774d474e7cbd2f1206d3',
  'symfony/error-handler' => 'v6.0.15@f000c166cb3ee32c4c822831a79260a135cd59b5',
  'symfony/event-dispatcher' => 'v6.0.9@5c85b58422865d42c6eb46f7693339056db098a8',
  'symfony/event-dispatcher-contracts' => 'v3.2.0@0782b0b52a737a05b4383d0df35a474303cabdae',
  'symfony/finder' => 'v6.0.11@09cb683ba5720385ea6966e5e06be2a34f2568b1',
  'symfony/http-client' => 'v6.0.16@5db1221826d5f841f443d434358d5f82c862c5a9',
  'symfony/http-client-contracts' => 'v3.2.0@c5f587eb445224ddfeb05b5ee703476742d730bf',
  'symfony/http-foundation' => 'v6.0.16@86eec2c66d00a2dd03d84352cd10b12df73101ec',
  'symfony/http-kernel' => 'v6.0.16@8ba1344821807ad51f230f0d01e0fa8f366e4abb',
  'symfony/mailer' => 'v6.0.16@aa47b34ab09fa03106d9e156632e4c6176b962da',
  'symfony/mime' => 'v6.0.16@ad9878bede5707cdf5ff7f5c86d82a921bbbfe1c',
  'symfony/options-resolver' => 'v6.0.3@51f7006670febe4cbcbae177cbffe93ff833250d',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/polyfill-uuid' => 'v1.27.0@f3cf1a645c2734236ed1e2e671e273eeb3586166',
  'symfony/process' => 'v6.0.11@44270a08ccb664143dede554ff1c00aaa2247a43',
  'symfony/psr-http-message-bridge' => 'v2.1.4@a125b93ef378c492e274f217874906fb9babdebb',
  'symfony/routing' => 'v6.0.15@3b7384fad32c6d0e1919b5bd18a69fbcfc383508',
  'symfony/service-contracts' => 'v3.2.0@aac98028c69df04ee77eb69b96b86ee51fbf4b75',
  'symfony/string' => 'v6.2.2@863219fd713fa41cbcd285a79723f94672faff4d',
  'symfony/translation' => 'v6.0.14@6f99eb179aee4652c0a7cd7c11f2a870d904330c',
  'symfony/translation-contracts' => 'v3.2.0@68cce71402305a015f8c1589bfada1280dc64fe7',
  'symfony/uid' => 'v6.0.13@db426b27173f5e2d8b960dd10fa8ce19ea9ca5f3',
  'symfony/var-dumper' => 'v6.0.14@72af925ddd41ca0372d166d004bc38a00c4608cc',
  'symfony/var-exporter' => 'v6.0.10@e3df004a8d0fb572c420a6915cd23db9254c8366',
  'tanmuhittin/laravel-google-translate' => '2.1.0@65e53f8cf442dd29c2eb386099acee931592aef0',
  'tijsverkoyen/css-to-inline-styles' => '2.2.5@4348a3a06651827a27d989ad1d13efec6bb49b19',
  'twilio/sdk' => '6.44.0@d0f8b4c642209a08066990eaea55ee6f292e4f8d',
  'tymon/jwt-auth' => 'dev-develop@014be8d493d228d14bbc291b24e835d330c092a0',
  'unicodeveloper/laravel-paystack' => '1.0.9@785aa1c5a1b07e06e2cc5c63f11e9dcf6c29a648',
  'vlucas/phpdotenv' => 'v5.5.0@1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
  'voku/portable-ascii' => '2.0.1@b56450eed252f6801410d810c8e1727224ae0743',
  'vonage/client-core' => '3.1.5@783d812e16d41282f7434b05e51224be7bb2eea6',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webklex/laravel-imap' => '2.4.0@97c480cc2dd6b76859c5e21ccb4fa6659b7ad6de',
  'webklex/php-imap' => '2.7.2@e22be3ed3760a939cd68b2907969c4b2478e8588',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'yajra/laravel-datatables-buttons' => 'v4.13.3@5c8fb97c26c14408c8933f68d86c6e4823d05740',
  'yajra/laravel-datatables-html' => 'v4.41.1@55895b55539cd776a8cd22dce874d1b6a7b9de8c',
  'yajra/laravel-datatables-oracle' => 'v9.21.2@a7fd01f06282923e9c63fa27fe6b391e21dc321a',
  'yandex/translate-api' => '1.5.2@c99e69cde3e688fc0f99c4d8a21585226a8e1938',
  'amphp/amp' => 'v2.6.2@9d5100cebffa729aaffecd3ad25dc5aeea4f13bb',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'amphp/parallel' => 'v1.4.1@fbc128383c1ffb3823866f71b88d8c4722a25ce9',
  'amphp/parallel-functions' => 'v1.1.0@04e92fcacfc921a56dfe12c23b3265e62593a7cb',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.1.4@76e9495fd6818b43a20167cb11d8a67f7744ee0f',
  'amphp/serialization' => 'v1.0.0@693e77b2fb0b266c3c7d622317f881de44ae94a1',
  'amphp/sync' => 'v1.4.2@85ab06764f4f36d63b1356b466df6111cf4b89cf',
  'barryvdh/laravel-debugbar' => 'v3.7.0@3372ed65e6d2039d663ed19aa699956f9d346271',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'fakerphp/faker' => 'v1.21.0@92efad6a967f0b79c499705c69b662f738cc9e4d',
  'filp/whoops' => '2.14.6@f7948baaa0330277c729714910336383286305da',
  'gitonomy/gitlib' => 'v1.3.7@00b57b79f02396aa4c7c163f76fe2bc48faebbb7',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'maximebf/debugbar' => 'v1.18.1@ba0af68dd4316834701ecb30a00ce9604ced3ee9',
  'mockery/mockery' => '1.5.1@e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v6.3.2@83699b231e7f277bfa2e823788973bf4082f019a',
  'nunomaduro/larastan' => '2.3.1@2217d0725884fd68f029fe22919edd3f910683d3',
  'ondram/ci-detector' => '4.1.0@8a4b664e916df82ff26a44709942dfd593fa6f30',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpmyadmin/sql-parser' => '5.5.0@8ab99cd0007d880f49f5aa1807033dbfa21b1cb5',
  'phpro/grumphp' => 'v1.15.0@533e45484be80d426010a318ff6f99fbe33350a5',
  'phpstan/phpstan' => '1.9.4@d03bccee595e2146b7c9d174486b84f4dc61b0f2',
  'phpunit/php-code-coverage' => '9.2.22@e4bf60d2220b4baaa0572986b5d69870226b06df',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.27@a2bc7ffdca99f92d959b3f2270529334030bba38',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.0@fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'seld/jsonlint' => '1.9.0@4211420d25eba80712bff236a98960ef68b866b7',
  'spatie/backtrace' => '1.2.1@4ee7d41aa5268107906ea8a4d9ceccde136dbd5b',
  'spatie/flare-client-php' => '1.3.2@609903bd154ba3d71f5e23a91c3b431fa8f71868',
  'spatie/ignition' => '1.4.1@dd3d456779108d7078baf4e43f8c2b937d9794a1',
  'spatie/laravel-ignition' => '1.6.3@2db918babd96f87b73fc26e4195f5a19328dd123',
  'symfony/config' => 'v6.0.11@956d4ec5df274dda91a4cedfccc2bfd063f6f649',
  'symfony/dependency-injection' => 'v6.0.16@2140291b9aface8d1d53299123fcffd1e0782b43',
  'symfony/dotenv' => 'v6.0.5@1c2288fdfd0787288cd04b9868f879f2212159c4',
  'symfony/filesystem' => 'v6.0.13@3adca49133bd055ebe6011ed1e012be3c908af79',
  'symfony/yaml' => 'v6.0.16@eb85bd1b0b297e976f3ada52ad239ef80b4dbd0b',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
