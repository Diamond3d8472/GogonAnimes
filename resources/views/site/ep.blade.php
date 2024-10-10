@extends('site.layouts.basic')
@section('conteudo')

    <div class="container" id="container">
      <!-- Linha Video PLAYER -->
      <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 mb-3 p-4">
          <!-- Video Player -->
            <video controls crossorigin playsinline data-plyr-config='{ "keyboard": "{ focused: true, global: false }" }' data-poster="{{ asset('animes/'.$episodio[0]->temporada->anime->nome.'/'.$episodio[0]->temporada['num_temporada'].'/'.$episodio[0]['num_ep'].'/banner.png') }}" id="player">
            <source src="{{ asset('animes/'.$episodio[0]->temporada->anime->nome.'/'.$episodio[0]->temporada['num_temporada'].'/'.$episodio[0]['num_ep'].'/ep.mp4') }}" type="video/mp4" size="1080" />
            <track kind="captions" label="Portugues" srclang="pt" src="{{ asset('animes/'.$episodio[0]->temporada->anime->nome.'/'.$episodio[0]->temporada['num_temporada'].'/'.$episodio[0]['num_ep'].'/legenda.vtt') }}" default />
            </video>
          <!-- Video Player -->
          <!-- Linha dos comentarios -->

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <p class="small mb-0 pt-4 text-white"><a href="{{route('site.anime', $episodio[0]->temporada->anime->nome)}}" class="link-info link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">{{$episodio[0]->temporada->anime['nome']}}</a> - {{$episodio[0]['visualizacoes']}} Visualizações</p>
              <div class="text-white">
                  <h5>T {{$episodio[0]->temporada['num_temporada']}} EP {{$episodio[0]['num_ep']}} - {{$episodio[0]['nome']}}</h5>
              </div>
              <p class="small mb-0 text-white">Lançado em {{date('d/m/Y', strtotime($episodio[0]['datatempo_criacao']));}}</p>
              <p class="mb-0 pt-2 text-white">Descrição:</p>
              <p class="small mb-0 pt-2 text-white">{{$episodio[0]['descricao']}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-4">

              @if (auth()->check())
              <!-- Deixe seu comentario -->
              <div class="card border-dark bg-transparent text-white">
                <div class="card-body p-1 pt-4">
                  <div class="d-flex flex-start w-100">
                    <img class="rounded-circle shadow-1-strong me-3" src="{{ asset(auth()->user()->foto_perfil != null ? 'storage/profiles/'.auth()->user()->cod_user.'/profile.png' : 'images/usuarios/default.png') }}?{{ time() }}" alt="avatar" width="65" height="65" />
                    <div class="w-100">
                      <h5>Deixe seu comentario</h5>
                      <form action="{{route('site.comentar',$episodio[0]['cod_episodio'])}}" method="get">
                        @csrf
                      <div data-mdb-input-init class="form-outline">
                        <textarea class="form-control bg-transparent text-white" name="conteudo" id="textAreaExample" rows="3"></textarea>
                        <label class="form-label" for="textAreaExample">O que achou do episodio?</label>
                      </div>
                      <div class="d-flex justify-content-end mt-3">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info text-white">
                            Comentar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                        </button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Deixe seu comentario -->
              @endif
              
              <!-- Comentarios -->
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="card border-dark bg-transparent text-white">
                    <div class="card-body p-1">
                      <h4 class="mb-4 pb-2">Comentarios - {{$comentarios->count()}}</h4>
                      <div class="row">
                        <div class="col">
                        
                        @if(isset($comentarios) && $comentarios->count() > 0)
                          @foreach ($comentarios as $comentario)
                          <!-- 1 Comentario -->
                          <div class="d-flex flex-start mt-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="{{ asset($comentario->usuario['foto_perfil'] != null ? 'storage/profiles/'.$comentario->usuario['cod_user'].'/profile.png' : 'images/usuarios/default.png') }}?{{ time() }}" alt="avatar" width="65" 
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    {{$comentario->usuario['name']}} <span class="small">- {{$comentario['datatempo_criacao']}} </span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  {{$comentario['comentario']}}
                                </p>

                                {{-- Verifica se o comentario é seu para que voce possa remover --}}
                                @if(auth()->check() && $comentario->usuario->cod_user == auth()->user()->cod_user)
                                  <a href="{{route('site.removercomentario', ['cod_episodio'=>$episodio[0]->cod_episodio,'cod_comentario'=>$comentario->cod_comentario])}}" class="link-danger mb-0 link-offset-2 link-underline-opacity-0">
                                    Remover
                                  </a>
                                @endif

                              </div>
                            </div>
                          </div>
                          <!-- Fim do 1 comentario -->
                          @endforeach
                        @endif
                      
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Comentarios -->

            </div>
          </div>
          <!-- Linha dos comentarios -->
        </div>

        <!-- Proximos Episodios -->
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 mb-3 p-4">
            <h5 class="text-white">Temporada {{$temporada[0]['num_temporada']}}</h5>
          @foreach ($episodios as $episodio)
            <div class="card mb-3 text-bg-dark">
            <a href="{{route('site.episode', ['nome_anime'=>$temporada[0]->anime['nome'],'num_temporada'=>$temporada[0]['num_temporada'], 'num_episodio'=>$episodio['num_ep']])}}" class="link-light link-offset-2 link-underline-opacity-0">
              <img src="{{ asset('animes/'.$episodio->temporada->anime['nome'].'/'.$episodio->temporada['num_temporada'].'/'.$episodio['num_ep'].'/banner.png') }}" class="card-img" alt="...">
              <div class="card-img-overlay">
                <p class="card-text"><small>Episodio - {{$episodio['num_ep']}}</small></p>
              </div>
            </a>
            </div>
          @endforeach

        </div>
      </div>
    </div>

@endsection