<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-sm">
        <a class="navbar-brand" href="{{route('site.index')}}">
          <img src="{{ asset('Images/Logos/logo.png') }}" alt="Logo" width="85" height="17" class="d-inline-block align-text-center">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.popular')}}">Populares</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.generos')}}">Generos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('site.new')}}">Novidades</a>
            </li>

            {{-- Codigo para aparecer o botao para entrar no admin --}}
            @if (auth()->check() && auth()->user()->tipo_de_acesso == 1)
            <li class="nav-item">
              <a class="nav-link active"  href="{{route('site.admin.index')}}">Administrativo</a>
            </li>
            @endif
            {{-- Fim da condiçao --}}

          </ul>
          <ul class="navbar-nav">
            <li class="nav-item"> 
              <a type="button" onclick="openSearch()" class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
              </a>
            </li>
            @if (auth()->check())
              <li class="nav-item">
                <a type="button" href="{{route('site.favoritos')}}" class="btn btn-dark">
                  <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="20" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                  </svg>
                </a>
              </li>
            @endif
            <li class="nav-item dropdown">
              <a type="button" class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
              </a>
              
              <ul class="dropdown-menu">

              {{-- Condiçao para ver se o user esta logado caso esteja ele vai apresentar botoes diferentes no menu do usuario --}}
              @if (auth()->check())

                <li><a class="dropdown-item" href="{{route('site.user')}}">{{auth()->user()->name}}</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('site.logout')}}">Sair</a></li>

              @else

                <li><a class="dropdown-item" href="{{route('site.login')}}">Entrar</a></li>
                <li><a class="dropdown-item" href="{{route('site.registrar')}}">Registrar</a></li>
                
              @endif

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <script>
     function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
      }

      function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
      }
  </script>