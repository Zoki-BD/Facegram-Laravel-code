@component('mail::message')
# Introduction

Ova e FACEGRAM !!!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
