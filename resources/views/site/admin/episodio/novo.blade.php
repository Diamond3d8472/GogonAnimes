@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="m-0 font-weight-bold text-info">Cadastrar Novo Episodio</h5>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <label class="text-white">Banner do Episodio</label>
            <div class="mb-4 d-flex justify-content-center">
                <img id="selectedImage" class="img-fluid mx-auto d-block w-100" src="{{ asset('animes/Kimetsu no Yaiba/5/2/banner.png') }}"
                alt="example placeholder"/>
            </div>
            <form action="{{route('site.admin.animes.new')}}" method="post">
                <label class="form-label btn btn-info btn-block text-white " for="customFile1">Escolha a capa</label>
                <input type="file" name="foto" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="form-group text-white">
                <label for="exampleFormControlInput1">Nome Do Episodio</label>
                <input type="text" name="nome" class="form-control rounded-0" placeholder="Exemplo: Shingeki no kyojin">
            </div>
              <div class="form-group text-white">
                <label for="exampleFormControlInput1">Numero</label>
                <input type="text" name="nome" class="form-control rounded-0" placeholder="Exemplo: 1">
            </div>
            <div class="form-group text-white">
                <label for="descricao">Descricão</label>
                <textarea class="form-control rounded-0" name="descricao" rows="5" placeholder="Entre com a descrição do episodio"></textarea>
            </div>
            <div class="form-group text-white">
                <label class="form-label" for="customFile">Video</label>
                <input type="file" class="form-control rounded-0" id="customFile" />
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <a data-mdb-button-init data-mdb-ripple-init href="{{route('site.admin.temporadas', $cod_anime)}}" class="btn btn-block btn-danger btn-lg px-5" type="submit">Voltar</a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-block btn-success btn-lg px-5" type="submit">Salvar</button>
                </div>
            </div>
            </form>
        </div>
    </div><!-- row -->
</div><!-- container -->
@endsection