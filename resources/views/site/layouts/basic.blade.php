<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}"/>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}" />

    <title>Gogon Animes</title>

  </head>

  {{-- Comentarios --}}
  <body class ="bg-dark d-flex flex-column min-vh-100">
  <!-- Navbar -->
  @include('site.layouts._partials.menu')
  <!-- Navbar -->

  {{-- Search --}}
  @include('site.layouts._partials.search')
  {{-- Search --}}

  {{-- Conteudo --}}
          @yield('conteudo')
  {{-- Conteudo --}}

  <!-- Footer -->
  @include('site.layouts._partials.footer')
  <!-- Footer -->
   <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script>
      const player = new Plyr('#player');
      function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
      }

      function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
      }
    </script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
  </body>
</html>