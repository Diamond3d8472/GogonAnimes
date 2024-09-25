@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container-fluid">
        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card bg-dark border-dark mb-4 text-info">
                                <div class="card-header bg-dark py-3">
                                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h6 class="m-0 font-weight-bold text-info">Temporadas Cadastradas</h6>
                                        <a href="{{route('site.admin.temporadas.new', $cod_anime)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-plus fa-sm text-white-50"></i> Novo Temporada</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Num_temporada</th>
                                                    <th>Descrição</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Num_temporada</th>
                                                    <th>Descrição</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                             @if(isset($resultados) && $resultados->count() > 0)
                                                @foreach ($resultados as $resultado)              
                                                <tr>
                                                    <td>{{$resultado['cod_temporada']}}</td>
                                                    <td>{{$resultado['num_temporada']}}</td>
                                                    <td>{{$resultado['descricao']}}</td>
                                                    <td>
                                                        <a href="{{route('site.admin.episodios', ['cod_anime' => $cod_anime, 'cod_temporada'=> $resultado['cod_temporada']])}}" type="button" class="btn btn-primary"><i class="far fa-eye"></i></a>
                                                        <a href="{{route('site.admin.temporadas.edit', ['cod_anime' => $cod_anime, 'cod_temporada'=> $resultado['cod_temporada']])}}" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                        <a href="{{route('site.admin.temporadas.edit', ['cod_anime' => $cod_anime, 'cod_temporada'=> $resultado['cod_temporada']])}}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection