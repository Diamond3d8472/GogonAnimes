@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="m-0 font-weight-bold text-info">Cadastrar Nova Temporada</h5>
    </div>
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group text-white">
                <label for="descricao">Descricão</label>
                <textarea class="form-control rounded-0" name="descricao" rows="5" placeholder="Entre com a descrição do anime">{{$temporada[0]['descricao']}}</textarea>
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