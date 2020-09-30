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
        <a class="navbar-item" href={{ route('home.index') }}>
          Home
        </a>

        {{-- <a class="navbar-item">
          Cadastrar
        </a> --}}



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
                    <a class="button is-primary" href={{ route('register') }}>
                        <strong>Criar conta</strong>
                    </a>
                    <a class="button is-light" href={{ route('login') }}>
                        Fazer Login
                    </a>
                </div>
            </div>
        </div>
    @elseif (Auth::check())
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a type="submit" class="button is-primary" href={{ route('movie.create') }}>
                        <strong>Cadastrar filmes</strong>
                    </a>
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
