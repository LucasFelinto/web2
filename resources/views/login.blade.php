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
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
          </a>

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>

            <a class="navbar-item">
              Documentation
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Jobs
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>


        @if (!Auth::check())
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Criar conta</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        @elseif (Auth::check())
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <form action={{ route('logout') }} method="POST">
                            @csrf
                            <button type="submit" class="button is-primary">
                                <strong>Sair</strong>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        </div>
      </nav>

    <div class="container is-fluid columns">
        <form action={{ route('/register') }} method="POST" class="container column is-half">
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
                <button class="button is-link">Enviar</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Voltar</button>
            </div>
        </div>
    </div>
</body>
</html>
