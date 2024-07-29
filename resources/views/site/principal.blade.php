@extends('site.layouts.basic')
@section('conteudo')
  
<div class="container pt-4">

<!-- Carousel -->
<div id="carousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('Images/principal/carousel/carousel01.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('Images/principal/carousel/carousel01.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('Images/principal/carousel/carousel01.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel -->

<!-- linha 1 -->
<div class="row pt-4">
  <div class="d-flex justify-content-start text-white">
    <h4>Animes Com Temporada Nova</h4>
  </div>
  <div class="d-flex">
    <p class="mb-0 text-white text-opacity-50">Assita Antes Da Nova Temporada Começar</p>
    <p class="ms-auto text-white text-opacity-50"><a href="#" class="link-info link-offset-2 link-underline-opacity-0">Ver Mais</a></p>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
  <!-- Item 1 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no Yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 1 -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <!-- Item 2 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no Yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 2 -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <!-- Item 2 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no Yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 2 -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <!-- Item 2 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no Yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 2 -->
  </div>
</div>
<!-- Fim linha 1 -->

<!-- linha 2 -->
<div class="row pt-4">

  <div class="text-white">
    <h4>Animes Com Temporada Nova</h4>
  </div>
  <div class="d-flex">
    <p class="mb-0 text-white text-opacity-50">Assita Antes Da Nova Temporada Começar</p>
    <p class="ms-auto text-white text-opacity-50"><a href="#" class="link-info link-offset-2 link-underline-opacity-0">Ver Mais</a></p>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
  <!-- Item 1 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 1 -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <!-- Item 2 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 2 -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <!-- Item 2 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 2 -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <!-- Item 2 -->
    <div class="card border-dark bg-transparent">
      <div class="row">
          <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid" alt="...">
      </div>
      <h5 class="text-white pt-2">Kimetsu no yaiba</h5>
      <p class="mb-0 text-white text-opacity-50">64 Episodios</p>
    </div>
  <!-- Item 2 -->
  </div>

</div>
<!-- fim linha 2 -->

<!-- Linha 3 -->

<div class="row pt-4">
  <h4 class="text-white">Novos Lançamentos</h4>
  <div class="d-flex">
    <h5 class="mb-0 text-white">Hoje</h5>
    <p class="ms-auto text-white text-opacity-50"><a href="#" class="link-info link-offset-2 link-underline-opacity-0">Ver Todos Os Lançamentos Da Semana</a></p>
  </div>
  
  <hr class="border border-light border-2 opacity-70">

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/2/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/1/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/1/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/2/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- Fim Linha 3 -->


<!-- Linha 4 -->

<div class="row pt-4">
  <h5 class="text-white">Ontem</h5>
  <hr class="border border-light border-2 opacity-70">

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/1/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/2/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/1/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="card border-dark bg-transparent text-white mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('animes/kimetsunoyaiba/5/2/banner.png') }}" class="img-fluid" alt="...">
      </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Kimetsu No Yaiba</h5>
            <p class="card-text">Nesse episodio finalmente o gabriel morre</p>
            <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Fim Linha 3 -->

</div>

@endsection