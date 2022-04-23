@extends('layout')

@section('content')
    <h3>{{$title}}</h3>
    <form action="{{$url}}" method="post">
        @csrf
        <x-input type="text" name="name" :current="$product->name" placeholder="Enter Name of Product" />
        
        <x-input type="textarea" name="description" :current="$product->description" placeholder="Enter description of Product" />
        <x-input type="text" name="price" :current="$product->price" placeholder="Enter price of Product" />
        
        <input type="submit" value="Submit">
    </form>

@endsection