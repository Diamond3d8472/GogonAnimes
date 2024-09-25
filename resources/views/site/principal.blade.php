@extends('site.layouts.basic')
@section('conteudo')
  
<div class="container pt-4">

<!-- Carousel -->
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="{{route('site.anime', 'Kimetsu no Yaiba')}}" class="link-light link-offset-2 link-underline-opacity-0">
      <img src="{{ asset('animes/Kimetsu no Yaiba/banner.png') }}" class="d-block w-100" alt="...">
    </a>
    </div>
    <div class="carousel-item">
    <a href="{{route('site.anime', 'Shingeki no kyojin')}}" class="link-light link-offset-2 link-underline-opacity-0">
      <img src="{{ asset('animes/Shingeki no kyojin/banner.png') }}" class="d-block w-100" alt="...">
    </a>
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
    <h4>Ultimos Animes adicionados</h4>
  </div>
  <div class="d-flex">
    <p class="mb-0 text-white text-opacity-50">Fique por dentro de todos os ultimos lançamentos </p>
    <p class="ms-auto text-white text-opacity-50"><a href="#" class="link-info link-offset-2 link-underline-opacity-0">Ver Mais</a></p>
  </div>

   @if(isset($animes) && $animes->count() > 0)
      @foreach ($animes as $anime)
        @if ($loop->iteration == 5)
            @break
        @endif
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <a href="{{route('site.anime', $anime['nome'])}}" class="link-info link-offset-2 link-underline-opacity-0">
        <!-- Item 1 -->
          <div class="card border-dark bg-transparent">
            <div class="row">
                <img src="{{asset('animes/'. $anime['nome'].'/'. $anime['foto'])}}" class="img-fluid" alt="...">
            </div>
            <h5 class="text-white pt-2">{{$anime['nome']}}</h5>
            @php
              $num_temporadas = 0
            @endphp
            @foreach ($temporadas as $temporada)
              @php
              if($temporada['anime_cod_anime'] == $anime['cod_anime']){
                $num_temporadas++;
              }
              @endphp
            @endforeach
            <p class="mb-0 text-white text-opacity-50">{{$num_temporadas}} Temporada</p>
          </div>
        <!-- Item 1 -->
        </a>
        </div>
    @endforeach
  @endif
</div>
<!-- Fim linha 1 -->

<!-- linha 2 -->
<div class="row pt-4">

  <div class="text-white">
    <h4>Temporadas novas</h4>
  </div>
  <div class="d-flex">
    <p class="mb-0 text-white text-opacity-50">Temporadas que estrearam recentemente</p>
    <p class="ms-auto text-white text-opacity-50"><a href="#" class="link-info link-offset-2 link-underline-opacity-0">Ver Mais</a></p>
  </div>
   @if(isset($temporadas) && $temporadas->count() > 0)
      @foreach ($temporadas as $temporada)
        @if ($loop->iteration == 5)
            @break
        @endif
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <a href="{{route('site.season', ['nome_anime'=>$temporada->anime['nome'],'num_temporada'=>$temporada['num_temporada']])}}" class="link-info link-offset-2 link-underline-opacity-0">
        <!-- Item 1 -->
          <div class="card border-dark bg-transparent">
            <div class="row">
                <img src="{{ asset('animes/'. $temporada->anime['nome'].'/'. $temporada['num_temporada'].'/'.'capa.png') }}" class="img-fluid" alt="...">
            </div>
            <h5 class="text-white pt-2">Temporada {{$temporada['num_temporada']}}</h5>
            @php
              $num_episodios = 0
            @endphp
            @foreach ($episodios as $episodio)
              @php
              if($episodio['temporada_cod_temporada'] == $temporada['cod_temporada']){
                $num_episodios++;
              }
              @endphp
            @endforeach
            <p class="mb-0 text-white text-opacity-50">{{$num_episodios}} episodios</p>
          </div>
        <!-- Item 1 -->
        </a>
        </div>
    @endforeach
  @endif

</div>
<!-- fim linha 2 -->

<!-- Linha 3 -->

<div class="row">
  <h4 class="text-white">Novos Lançamentos</h4>
  <h5 class="text-white">Hoje</h5>
  
  <hr class="border border-light border-2 opacity-70">

  @if($episodiosHoje->isEmpty())
  <p class="text-white">Nenhum episódio foi lançado hoje.</p>
  @else
      @foreach($episodiosHoje as $episodio)
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="card border-dark bg-transparent text-white mb-3">
              <a href="{{route('site.episode', ['nome_anime'=>$episodio->temporada->anime->nome,'num_temporada'=>$episodio->temporada->num_temporada, 'num_episodio'=>$episodio->num_ep])}}" class="link-light link-offset-2 link-underline-opacity-0">
              <div class="row">
                  <div class="col-md-6">
                  <img src="{{ asset('animes/kimetsu no yaiba/5/2/banner.png') }}" class="img-fluid" alt="...">
              </div>
                  <div class="col-md-6">
                  <div class="card-body">
                      <h5 class="card-title">{{$episodio->temporada->anime->nome}}</h5>
                      <p class="card-text">{{$episodio->descricao}}</p>
                      <p class="card-text">Temporada: {{$episodio->temporada->num_temporada}} Ep: {{$episodio->num_ep}}</p>
                      <p class="card-text"><small class="text-body-light">{{ $episodio->created_at->format('d/m/Y') }}</small></p>
                  </div>
                  </div>
              </div>
              </a>
              </div>
          </div>
          @endforeach
  @endif

  </div>

  <!-- Fim Linha 3 -->


  <!-- Linha 4 -->

  <div class="row pt-4">
  <h5 class="text-white">Outos Dias</h5>
  <hr class="border border-light border-2 opacity-70">

  @if($episodiosOutrosDias->isEmpty())
          <p class="text-white">Nenhum episódio foi lançado em dias anteriores.</p>
      @else
              @foreach($episodiosOutrosDias as $episodio)
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <div class="card border-dark bg-transparent text-white mb-3">
                  <a href="{{route('site.episode', ['nome_anime'=>$episodio->temporada->anime->nome,'num_temporada'=>$episodio->temporada->num_temporada, 'num_episodio'=>$episodio->num_ep])}}" class="link-light link-offset-2 link-underline-opacity-0">
                  <div class="row">
                      <div class="col-md-6">
                      <img src="{{ asset('animes/'.$episodio->temporada->anime->nome.'/'.$episodio->temporada->num_temporada.'/'.$episodio->num_ep.'/banner.png') }}" class="img-fluid" alt="...">
                  </div>
                      <div class="col-md-6">
                      <div class="card-body">
                          <h5 class="card-title">{{$episodio->temporada->anime->nome}}</h5>
                          <p class="card-text">{{$episodio->descricao}}</p>
                          <p class="card-text">Temporada: {{$episodio->temporada->num_temporada}} Ep: {{$episodio->num_ep}}</p>
                          <p class="card-text"><small class="text-body-light">{{ $episodio->created_at->format('d/m/Y') }}</small></p>
                      </div>
                      </div>
                  </div>
              </a>
                  </div>
              </div>
              @endforeach
      @endif

  </div>

  <!-- Fim Linha 3 -->

</div>

@endsection