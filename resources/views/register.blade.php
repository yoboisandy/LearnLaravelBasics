@extends('layout')

@section('content')

{{-- without using component --}}
<h4>Without using component</h4>
{{-- <form action="/register" method="post">
    @csrf
    {{$errors->first()}} <br><br>
    <input type="text" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}"><br>
    @error('name')
      <small>{{$message}}</small> 
    @enderror
    <br><br>
    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}"><br>
    @error('email')
      <small>{{$message}}</small> 
    @enderror
    <br><br>
    <input type="password" name="password" id="password" placeholder="Enter your password" ><br>
    @error('password')
      <small>{{$message}}</small> 
    @enderror
    <br><br>
    <input type="submit" value="Submit"><br><br>
</form> --}}


{{-- Using Component --}}
<h4>using component</h4>
<form action="/register" method="POST">
  @csrf
  @php
    $i = 10
  @endphp
  <x-input type="text" name="name" placeholder="Enter Your Name" :demo="$i"/>
  <x-input type="email" name="email" placeholder="Enter Your Email" />
  <x-input type="password" name="password" placeholder="Enter Your Password" />
  <input type="submit" value="Submit">
</form>
    
@endsection