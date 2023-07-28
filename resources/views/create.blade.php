@extends('layout.layout')
@section('title', 'create')
@section('content')

<h1>Create</h1>

<form action="{{route('store')}}" method="post">
    @csrf

    <div>
        <label>Nome: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Email: </label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Matéria: </label>
        <input type="text" name="materia">
    </div>
    <div>
        <label>Escola: </label>
        <input type="text" name="escola">
    </div>

    <button type="submit">Create</button>
</form>

@endsection
