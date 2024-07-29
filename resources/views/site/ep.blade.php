@extends('site.layouts.basic')
@section('conteudo')
  
    <div class="container" id="container">
      <!-- Linha Video PLAYER -->
      <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 mb-3 p-4">
          <!-- Video Player -->
            <video controls crossorigin playsinline data-plyr-config='{ "keyboard": "{ focused: true, global: false }" }' data-poster="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" id="player">
            <source src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/ep.mp4') }}" type="video/mp4" size="1080" />
            <track kind="captions" label="Portugues" srclang="pt" src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/legenda.vtt') }}" default />
            </video>
          <!-- Video Player -->
          <!-- Linha dos comentarios -->

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <p class="small mb-0 pt-4 text-white"><a href="#" class="link-info link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Kimetsu No Yaiba</a> - 1000 Visualizações</p>
              <div class="text-white">
                  <h5>EP1 - Tanjito VS Sua Mae</h5>
              </div>
              <p class="small mb-0 text-white">Lançado em 13 de julho de 2024</p>
              <p class="mb-0 pt-2 text-white">Descrição:</p>
              <p class="small mb-0 pt-2 text-white">Depois dos eventos no Vilarejo dos Ferreiros, o Esquadrão de Exterminadores está preocupado com um ataque iminente dos demônios de Muzan Kibutsuji. Para encontrar uma forma de derrotá-lo, Kagaya Ubuyashiki convoca uma reunião dos Hashira.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-4">
              <!-- Deixe seu comentario -->
              <div class="card border-dark bg-transparent text-white">
                <div class="card-body p-1 pt-4">
                  <div class="d-flex flex-start w-100">
                    <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="65" height="65" />
                    <div class="w-100">
                      <h5>Deixe seu comentario</h5>
                      <div data-mdb-input-init class="form-outline">
                        <textarea class="form-control bg-transparent text-white" id="textAreaExample" rows="3"></textarea>
                        <label class="form-label" for="textAreaExample">O que achou do episodio?</label>
                      </div>
                      <div class="d-flex justify-content-end mt-3">
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info text-white">
                            Comentar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Deixe seu comentario -->
              <!-- Comentarios -->
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="card border-dark bg-transparent text-white">
                    <div class="card-body p-1">
                      <h4 class="mb-4 pb-2">Comentarios</h4>
                      <div class="row">
                        <div class="col">
                          
                          <!-- 1 Comentario -->
                          <div class="d-flex flex-start">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65"
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    Maria Smantha <span class="small">- 2 hours ago</span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  It is a long established fact that a reader will be distracted by
                                  the readable content of a page.
                                </p>
                              </div>
                            </div>
                          </div>

                          <!-- Fim do 1 comentario -->

                          <!-- 1 Comentario -->
                          <div class="d-flex flex-start mt-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    Natalie Smith <span class="small">- 2 hours ago</span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  The standard chunk of Lorem Ipsum used since the 1500s is
                                  reproduced below for those interested. Sections 1.10.32 and
                                  1.10.33.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Fim do 1 comentario -->

                           <!-- 1 Comentario -->
                           <div class="d-flex flex-start mt-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    Natalie Smith <span class="small">- 2 hours ago</span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  The standard chunk of Lorem Ipsum used since the 1500s is
                                  reproduced below for those interested. Sections 1.10.32 and
                                  1.10.33.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Fim do 1 comentario -->

                           <!-- 1 Comentario -->
                           <div class="d-flex flex-start mt-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    Natalie Smith <span class="small">- 2 hours ago</span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  The standard chunk of Lorem Ipsum used since the 1500s is
                                  reproduced below for those interested. Sections 1.10.32 and
                                  1.10.33.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Fim do 1 comentario -->

                           <!-- 1 Comentario -->
                           <div class="d-flex flex-start mt-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    Natalie Smith <span class="small">- 2 hours ago</span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  The standard chunk of Lorem Ipsum used since the 1500s is
                                  reproduced below for those interested. Sections 1.10.32 and
                                  1.10.33.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Fim do 1 comentario -->

                           <!-- 1 Comentario -->
                           <div class="d-flex flex-start mt-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp" alt="avatar" width="65"
                              height="65" />
                            <div class="flex-grow-1 flex-shrink-1">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                    Natalie Smith <span class="small">- 2 hours ago</span>
                                  </p>
                                </div>
                                <p class="small mb-0">
                                  The standard chunk of Lorem Ipsum used since the 1500s is
                                  reproduced below for those interested. Sections 1.10.32 and
                                  1.10.33.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Fim do 1 comentario -->

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
          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3 text-bg-dark">
            <img src="{{ asset('animes/'.$nome_anime.'/'.$season_id.'/'.$ep_id.'/banner.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>
      </div>
    </div>

@endsection