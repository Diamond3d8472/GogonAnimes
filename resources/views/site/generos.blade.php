@extends('site.layouts.basic')
@section('conteudo')

<div class="container pt-3">

    <div class="row">
        <h5 class="text-white pb-3">Gêneros - Gogon Animes <hr class="border border-light border-2 opacity-70"></h5>

        @foreach ($generos as $genero)
        
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <a href="{{route('site.genero', $genero['nome'])}}" class="link-info link-offset-2 link-underline-opacity-0">
            <div class="card border-dark bg-transparent text-white mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('Images/generos/'.$genero['foto']) }}" class="img-fluid" alt="...">
                    </div>
                    <p class="mb-0 text-white">{{$genero['nome']}}</p>
                </div>
            </div>
            </a>
        </div>

        @endforeach
       
    </div>
    
</div>

@endsection