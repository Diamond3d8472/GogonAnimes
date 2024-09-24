@extends('site.layouts.basic')
@section('conteudo')

<div class="container pt-4">

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
    <h5 class="text-white">Outros dias</h5>
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