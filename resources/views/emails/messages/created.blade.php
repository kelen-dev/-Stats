@component('mail::message')
# Hey KelenS

- {{ $name }}
- {{ $email }}

@component('mail::panel')
{{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
