@component('mail::message')
# Introduction

Welcome to our app

@component('mail::button', ['url' =>  route('home') ])
Visit now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
