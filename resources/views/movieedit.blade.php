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
    <div class="container is-fluid columns">
        <form action={{ route('movie.store') }} method="POST" class="container column is-half">
            <h1>Editar Filme</h1>
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div class="notification is-danger">
                        {{-- <button class="delete"></button> --}}
                        <li>{{ $error }}</li>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="field">
            <label for="" class="label">Nome</label>
            <div class="control">
                <input type="name" name="name" placeholder="name" class="input" value={{ $movie->name }}>
            </div>
        </div>

        <div class="field">
            <label for="" class="label">Ano de lançamento</label>
            <div class="control">
            <input type="number" name="release_year" placeholder="ano de lançamento" class="input" value="{{ $movie->release_year }}">
            </div>
        </div>

        <div class="field">
            <label for="" class="label">Diretor</label>
            <div class="control">
            <input type="text" name="director" placeholder="diretor" class="input" value={{ $movie->director }}>
        </div>


        <div class="field is-grouped mt-3">
            <div class="control">
                <button  type="submit" class="button is-link">Editar</button>
            </div>
        </div>
    </div>
    <div>
    @extends('layouts.nav')

    </div>
</body>
</html>
