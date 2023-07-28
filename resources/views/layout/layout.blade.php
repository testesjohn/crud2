<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <p>Crud de professores</p>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('create')}}">Create</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            @if (Session('msg'))
                <div>{{Session('msg')}}</div>
            @endif
            @yield('content')
        </div>
    </main>
</body>
</html>
