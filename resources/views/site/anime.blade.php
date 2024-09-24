@extends('site.layouts.basic')
@section('conteudo')

    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pt-4">
            <!-- Item 1 -->
            <div class="card border-dark bg-transparent">
                <div class="row">
                    <img src="{{ asset('animes/'. $anime[0]['nome'].'/'. $anime[0]['foto']) }}" class="img-fluid mx-auto d-block w-100" alt="...">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Ano: {{$anime[0]['ano']}}</div>
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporadas: {{$temporadas->count()}}</div>
            <div class="d-grid gap-2 mx-auto pt-2">

            @if (isset($favorito) && $favorito->count() >= 1)
              <a href="{{route('site.removerfavorito', $anime[0]['cod_anime'])}}" class="btn btn-danger rounded-0 fw-bold" type="button">Remover dos Favoritos</a>
            @elseif(isset($favorito))
              <a href="{{route('site.salvarfavorito', $anime[0]['cod_anime'])}}" class="btn btn-info text-white rounded-0 fw-bold" type="button">Salvar nos Favoritos</a>
            @endif

            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 pt-4">

            {{-- Informaçoes do anime e temporada superior--}}
            <div class="d-flex justify-content-start text-white">
              <h4>{{$anime[0]['nome']}}</h4>
            </div>
            {{-- Mostrar generos --}}
            @foreach ($anime[0]->generos as $genero)
                <span class="badge text-bg-info text-white">{{$genero['nome']}}</span>
            @endforeach
            {{-- Fim do mostrar generos --}}

            <div class="d-flex justify-content-start text-white pt-2">
              <h4>Resumo:</h4>
            </div>
            <p class="mb-0 text-white text-opacity-50 fs-5">{{$anime[0]['descricao']}}</p>
            {{-- Fim do Informaçoes do anime e temporada superior--}}
            
              @if(isset($temporadas) && $temporadas->count() > 0)
                @foreach ($temporadas as $temporada)
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-2">
                <a href="{{route('site.season', ['nome_anime'=>$anime[0]['nome'],'num_temporada'=>$temporada['num_temporada']])}}" class="link-info link-offset-2 link-underline-opacity-0">
                <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporada {{$temporada['num_temporada']}} </div>
                </a>
              </div>
              @endforeach
            @endif

            </div>
        </div>
    </div>

@endsection