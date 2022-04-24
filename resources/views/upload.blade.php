@extends('layout')
@section('content')
    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Attach a File</label><br><br>
        <input type="file" name="file" id="file">
        <br><br>
        <input type="submit">
    </form>
@endsection