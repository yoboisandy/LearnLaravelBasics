@extends('layout')
@section('content')
<div>
    <a href="/products/create">Add product</a>
</div>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        @foreach ($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
        </tr>
        @endforeach
    </table>
@endsection