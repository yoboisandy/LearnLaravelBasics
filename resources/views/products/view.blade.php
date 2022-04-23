@extends('layout')
@section('content')
<div>
    <a href="{{route('products.create') }}">Add product</a>
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
                <a href={{route('products.destroy', $p->id)}}>
                    <button>Delete</button>
                </a>
                <a href={{}}>
                    <button>Edit</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection