@component('mail::message')
# @lang('email.hello') @if (! empty($notifiableName)) {{ $notifiableName }} @endif @lang('!')

@if (!empty($content))

@component('mail::text', ['text' => $content])

@endcomponent
@endif

@if (!empty($url))
    @component('mail::button', ['url' => $url, 'themeColor' => ((!empty($themeColor)) ? $themeColor : '#1f75cb')])
    {{ $actionText }}
    @endcomponent
@endif

@lang('email.thankyouNote')<br>
@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
