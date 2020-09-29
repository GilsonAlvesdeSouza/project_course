@component('mail::message')
Olá, Você recebeu uma nova mensagem apartir so seu site!

Nome: <b>{{ $replay_name }}</b>

Email: {{$replay_mail}}

Sobre: {{ $subject }}

Mensagem:
@component('mail::panel')
    {{ $message }}
@endcomponent

@endcomponent
