@extends('site.layouts.basic')
@section('conteudo')

    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pt-4">
            <!-- Item 1 -->
            <div class="card border-dark bg-transparent">
                <div class="row">
                    <img src="{{ asset('animes/KimetsunoYaiba/5/banner.png') }}" class="img-fluid mx-auto d-block w-100" alt="...">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Ano: 2020</div>
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Episodios: 40</div>
            <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporadas: </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 pt-4">

            <div class="d-flex justify-content-start text-white">
              <h4>Kimetsu No Yaiba</h4>
            </div>
            <span class="badge text-bg-info text-white">Ação</span>
            <span class="badge text-bg-info text-white">Aventura</span>
            <span class="badge text-bg-info text-white">Comedia</span>
            <span class="badge text-bg-info text-white">Shounen</span>
            <div class="d-flex justify-content-start text-white pt-2">
              <h4>Resumo:</h4>
            </div>
            <p class="mb-0 text-white text-opacity-50 fs-5">Japão, era Taisho. Tanjiro, um bondoso jovem que ganha a vida vendendo carvão, descobre que sua família foi massacrada por um demônio. 
              E pra piorar, Nezuko, sua irmã mais nova e única sobrevivente, também foi transformada num demônio. Arrasado com esta sombria realidade, Tanjiro decide se tornar um matador de demônios para fazer sua irmã voltar a ser humana, 
              e para matar o demônio que matou sua família. Um triste conto sobre dois irmãos, onde os destinos dos humanos e dos demônios se entrelaçam, começa agora.</p>
          

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-2">

              <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporada 1 </div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-2">

              <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporada 2</div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-2">

              <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporada 3</div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-2">

              <div class="p-3 bg-info bg-opacity-100 border border-info text-white fw-bold">Temporada 4</div>

              </div>

            </div>
        </div>
    </div>

@endsection