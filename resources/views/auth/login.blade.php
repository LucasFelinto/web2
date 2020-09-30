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
    @extends('layouts.nav')
    <div class="container is-fluid columns">
        <form action={{ route('login') }} method="POST" class="container column is-half">
            <h1>Login</h1>
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
            <label for="" class="label">E-mail</label>
            <div class="control">
            <input type="email" name="email" placeholder="email" class="input">
            </div>
        </div>

        <div class="field">
            <label for="" class="label">Senha</label>
            <div class="control">
            <input type="password" name="password" placeholder="senha" class="input">
        </div>

        <div class="field is-grouped mt-3">
            <div class="control">
                <button type="submit" class="button is-link">Enviar</button>
            </div>
        </div>
    </div>
</body>
</html>
