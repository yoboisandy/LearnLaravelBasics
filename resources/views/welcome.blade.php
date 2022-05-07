@extends('layout')
@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="d-flex gap-5 bg-warning fs-3">
        <div>
            Language Preferences:
        </div>
        <a href="/welcome/en">English</a>
        <a href="/welcome/np">Nepali</a>
        <a href="/welcome/tamil">Tamil</a>
        <a href="/welcome/spanish">Spanish</a>
    </div>
</div>

<h1 class="text-center mt-5">
    @lang('lang.welcome')
</h1>

@endsection