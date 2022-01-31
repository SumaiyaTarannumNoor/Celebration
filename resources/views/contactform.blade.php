@component('mail::message')

    Feel free to contact me via

    Thanks,<br>


@component('mail::button', ['url' => ''])

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
