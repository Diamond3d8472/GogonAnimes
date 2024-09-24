@extends('site.layouts.basic')
@section('conteudo')

    <div class="container pt-4">

        


            <div class="d-flex">
                <h5 class="mb-0 text-white">Voce pesquisou por: {{$_GET['search']}} </h5>
                <div class="btn-group ms-auto" data-bs-theme="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-filter text-white" data-bs-toggle="dropdown" aria-expanded="false" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" data-bs-theme="dark" href="#">Action</a></li>
                        <li><a class="dropdown-item" data-bs-theme="dark" href="#">Another action</a></li>
                        <li><a class="dropdown-item" data-bs-theme="dark" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" data-bs-theme="dark" href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        {{-- Verifica se achou algum resultado --}}
        @if(isset($resultados) && $resultados->count() > 0)
        <div class="row">
            @foreach ($resultados as $resultado)
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 pt-4">
                <!-- Item 1 -->
                    <div class="card border-dark bg-transparent">
                    <a href="{{Route('site.anime', $resultado['nome'])}}">
                        <div class="row">
                            <img src="{{ asset('animes/'.$resultado['nome'].$resultado['foto']) }}" class="img-fluid" alt="...">
                        </div>
                    </a>
                    <a class="text-white pt-2 link-offset-2 link-underline-dark" href="{{Route('site.anime', $resultado['cod_anime'])}}">{{$resultado['nome']}}</a>
                    </div>
                <!-- Item 1 -->
                </div>
            @endforeach
            </div>
        {{-- Quando nao encontra nenhum resultado --}}
        @else
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold text-danger">Erro</h1>
                <p class="fs-3 text-white"> <span class="text-danger">Opps!</span> Nada foi encontrado na pesquisa</p>
                <p class="lead text-white">
                    Tente refazer a pesquisa novamente, verificando o campo digitado.
                </p>
                <a href="index.html" class="btn btn-info text-white">Voltar para o inicio</a>
            </div>
        </div>
        @endif

    </div>

@endsection