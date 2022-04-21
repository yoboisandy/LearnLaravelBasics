@extends('layout')

@section('content')

{{-- withour using component --}}
<form action="/register" method="post">
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
</form>
    
@endsection