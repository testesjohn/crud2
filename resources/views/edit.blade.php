@extends('layout.layout')
@section('title', 'edit')
@section('content')

<h1>Edit</h1>

<form action="{{route('update', $teacher->id)}}" method="post">
    @csrf
    @method('put')

    <div>
        <label>Nome: </label>
        <input type="text" name="name" value="{{$teacher->name}}">
    </div>
    <div>
        <label>Email: </label>
        <input type="email" name="email" value="{{$teacher->email}}">
    </div>
    <div>
        <label>Matéria: </label>
        <input type="text" name="materia" value="{{$teacher->materia}}">
    </div>
    <div>
        <label>Escola: </label>
        <input type="text" name="escola" value="{{$teacher->escola}}">
    </div>

    <button type="submit">Edit</button>
</form>

@endsection
