@component('mail::message')
# Introduction

Welcome!!!!

Queue Test!!

@component('mail::button', ['url' => 'http://ec2-13-229-129-10.ap-southeast-1.compute.amazonaws.com/home'])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
