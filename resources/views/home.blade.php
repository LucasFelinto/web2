<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bulma.min.css') }}>

    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    @extends('layouts.nav')

    <table class="table">
        <thead>
          <tr>
            <th><abbr title="Played">Nome</abbr></th>
            <th><abbr title="Won">Ano de lançamento</abbr></th>
            <th><abbr title="Drawn">Diretor</abbr></th>
            <th><abbr title="Drawn">Editar</abbr></th>
          </tr>
        </thead>
        <tfoot>
            @foreach ($movies as $movie)
                <tr>
                <th><abbr title="Goals against">{{ $movie->name }}</abbr></th>
                    <th><abbr title="Goal difference">{{ $movie->release_year }}</abbr></th>
                    <th><abbr title="Points">{{ $movie->director }}</abbr></th>
                    <th><abbr title="Points"><a href={{ route('movie.show', ['id' => $movie->id]) }}>Editar</a></abbr></th>
                </tr>
            @endforeach
        </tfoot>
        <tbody>
        </tbody>
      </table>


    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    {{-- @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif --}}

</body>
</html>
