@extends('layout')
@section('content')
<div>
    <a href="{{route('products.create') }}">Add product</a>
    <a href="{{route('products.trash') }}">Trash</a>
</div>
<br>
<div style="display: flex">
    <form action="" method="get">
        <input type="search" name="search" id="search" value="{{$search}}">
        <input type="submit" value="Search">
    </form>
    <a href="{{url('/products')}}">
        <button>Reset</button>
    </a>
</div>
<br>
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
                    <button>Trash</button>
                </a>
                <a href={{route('products.edit', $p->id)}}>
                    <button>Edit</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection