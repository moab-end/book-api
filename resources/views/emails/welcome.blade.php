Hello {{$user->name}}
Thank you for creating an account. Please verify your email using this link:
{{ route('verify',$user->verification_token) }}

@component('mail::message')
    # Hello {{$user->name}}

    Thank you for creating an account. Please verify your email using button below:

    @component('mail::button', ['url' => route('verify',$user->verification_token)])
        Verify account
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
