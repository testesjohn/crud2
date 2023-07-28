@extends('layout.layout')
@section('title', 'home')
@section('content')

<h1>HOME</h1>

@if ($teachers -> count() > 0)

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>matéria</th>
            <th>escola</th>
            <th>ações</th>
        </tr>
    </thead>

    @foreach ($teachers as $teacher)

    <tbody>
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->materia}}</td>
            <td>{{$teacher->escola}}</td>
            <td>
                <a href="{{route('edit', $teacher->id)}}">Edit</a>
                <form action="{{route('destroy', $teacher->id)}}" method="post">
                    @csrf
                    @method('delete')

                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
    </tbody>

    @endforeach

</table>
@else
<h3>
    Não há nenhum professor inscrito, <a href="{{Route('create')}}">inscreva-se já!</a>
</h3>
@endif

@endsection
