<x-mail::message>
# Introduction

There is a new Query from {{$name}}.
The message is:
{{ $message }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
