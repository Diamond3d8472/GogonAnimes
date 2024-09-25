@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="m-0 font-weight-bold text-info">Editar Anime - {{$anime[0]['nome']}}</h5>
    </div>
  <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="form-group text-white">
                <label for="exampleFormControlInput1">Nome Do Anime</label>
                <input type="text" name="nome" class="form-control rounded-0" placeholder="Exemplo: Shingeki no kyojin" value="{{$anime[0]['nome']}}">
            </div>
            <div class="form-group text-white">
                <label for="descricao">Descricão</label>
                <textarea class="form-control rounded-0" name="descricao" rows="5" placeholder="Entre com a descrição do anime">{{$anime[0]['descricao']}}</textarea>
            </div>
            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-block btn-success btn-lg px-5" type="submit">Salvar</button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <label for="exampleFormControlInput1" class="text-dark">.</label>
            <a data-mdb-button-init data-mdb-ripple-init href="{{route('site.admin.animes')}}" class="btn btn-block btn-info btn-lg px-5" data-toggle="modal" data-target="#EditarCapa">Editar Capa</a>
            <a data-mdb-button-init data-mdb-ripple-init href="{{route('site.admin.animes')}}" class="btn btn-block btn-info btn-lg px-5" data-toggle="modal" data-target="#EditarBanner" type="submit">Editar Banner</a>
            <a data-mdb-button-init data-mdb-ripple-init href="{{route('site.admin.temporadas', $anime[0]['cod_anime'])}}" class="btn btn-block btn-info btn-lg px-5" type="submit">Ver Temporadas</a>
            <a data-mdb-button-init data-mdb-ripple-init href="{{route('site.admin.animes')}}" class="btn btn-block btn-danger btn-lg px-5" type="submit">Voltar</a>
        </div>
    </div><!-- row -->
</div><!-- container -->

<!-- Modal Capa-->
<div class="modal fade" id="EditarCapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="mb-2 d-flex justify-content-center">
            <img id="selectedImage" class="img-fluid mx-auto d-block w-100" src="{{ asset('animes/'. $anime[0]['nome'].$anime[0]['foto']) }}"
            alt="example placeholder"/>
        </div>
            <form action="{{route('site.admin.animes.edit', $anime[0]['cod_anime'])}}" method="post">
            <label class="form-label btn btn-info btn-block text-white" for="customFile1">Escolha a capa</label>
            <input type="file" name="foto" class="form-control d-none" id="customFile1" onchange="showCapa(event, 'selectedImage')" />
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Fechar</button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
                <button type="button" class="btn btn-success btn-block" type="submit">Salvar</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal banner-->
<div class="modal fade" id="EditarBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
        <div class="mb-2 d-flex justify-content-center">
            <img id="selectedBanner" class="img-fluid mx-auto d-block w-100" src="{{ asset('animes/'. $anime[0]['nome'].$anime[0]['banner']) }}"
            alt="example placeholder"/>
        </div>
            <form action="{{route('site.admin.animes.edit', $anime[0]['cod_anime'])}}" method="post">
            <label class="form-label btn btn-info btn-block text-white" for="customFile2">Escolha a capa</label>
            <input type="file" name="foto" class="form-control d-none" id="customFile2" onchange="showBanner(event, 'selectedBanner')" />
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Fechar</button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
                <button type="button" class="btn btn-success btn-block" type="submit">Salvar</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
    function showCapa(event, elementId) {
        const selectedImage = document.getElementById(elementId);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    function showBanner(event, elementId) {
        const selectedImage = document.getElementById(elementId);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>
@endsection