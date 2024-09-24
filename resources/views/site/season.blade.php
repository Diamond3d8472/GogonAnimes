@extends('site.layouts.basic')
@section('conteudo')

    <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pt-4">
            <!-- Item 1 -->
            <div class="card border-dark bg-transparent">
                <div class="row">
                    <img src="{{ asset('animes/'. $temporada[0]->anime['nome'].'/'. $temporada[0]['num_temporada'].'/'.'capa.png') }}" class="img-fluid mx-auto d-block w-100" alt="...">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Ano: {{date('Y', strtotime($temporada[0]['datatempo_criacao']));}}</div>
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Episodios: {{$episodios->count()}}</div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 pt-4">

            {{-- Informaçoes do anime e temporada superior--}}
            <h4 class="text-white">Kimetsu No Yaiba</h4>
            <p class="mb-0 text-white text-opacity-50 pb-2">Temporada {{$temporada[0]['num_temporada']}}</p>

            {{-- Mostrar generos --}}
            @foreach ($temporada[0]->anime->generos as $genero)
                <span class="badge text-bg-info text-white">{{$genero['nome']}}</span>
            @endforeach
            {{-- Fim do mostrar generos --}}

            <div class="d-flex justify-content-start text-white pt-2">
              <h4>Resumo da temporada:</h4>
            </div>
            <p class="mb-0 text-white text-opacity-50 fs-5">{{$temporada[0]->anime['descricao']}}</p>
            {{-- Fim do Informaçoes do anime e temporada superior--}}

              <h4 class="text-white pt-2">Lista de Episodios</h4>
            @if(isset($episodios) && $episodios->count() > 0)
                @foreach ($episodios as $episodio)
                <div class="col-xs-6 col-sm-9 col-md-9 col-lg-9 pt-2">
                    <div class="card border-dark bg-transparent text-white mb-3">
                    <a href="{{route('site.episode', ['nome_anime'=>$temporada[0]->anime['nome'],'num_temporada'=>$temporada[0]['num_temporada'], 'num_episodio'=>$episodio['num_ep']])}}" class="link-light link-offset-2 link-underline-opacity-0">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <img src="{{ asset('animes/'.$temporada[0]->anime['nome'].'/'.$temporada[0]['num_temporada'].'/'.$episodio['num_ep'].'/banner.png') }}" class="img-fluid w-100 text-center" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Episodio {{$episodio['num_ep']}}</h5>
                                    <p class="card-text">{{$episodio['descricao']}}</p>
                                    <p class="card-text"><small class="text-body-light">Lançado {{date('d/m/Y', strtotime($episodio['datatempo_criacao']));}}</small></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
            @endif

            </div>
        </div>
    </div>
@endsection