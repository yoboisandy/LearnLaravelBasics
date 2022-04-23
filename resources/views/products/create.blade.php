@extends('layout')

@section('content')

    <form action="/products" method="post">
        @csrf
        <x-input type="text" name="name" placeholder="Enter Name of Product" />
        
        <x-input type="textarea" name="description" placeholder="Enter description of Product" />
        <x-input type="text" name="price" placeholder="Enter price of Product" />
        
        <input type="submit" value="Submit">
    </form>

@endsection