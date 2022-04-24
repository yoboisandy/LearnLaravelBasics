@extends('layout')
@section('content')
<div>
    <a href="{{route('products.view') }}">All Products</a>
</div>
<table border="2">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    @foreach ($products as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->name}}</td>
        <td>{{$p->price}}</td>
        <td>
            <a href={{route('products.forcedelete', $p->id)}}>
                <button>Delete Permanently</button>
            </a>
            <a href={{route('products.restore', $p->id)}}>
                <button>Restore</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection