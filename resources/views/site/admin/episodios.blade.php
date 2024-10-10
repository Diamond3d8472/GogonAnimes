@extends('site.admin.layouts.basic')
@section('conteudo')

<div class="container-fluid">
        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card bg-dark border-dark mb-4 text-info">
                                <div class="card-header bg-dark py-3">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h6 class="m-0 font-weight-bold text-info">Episodios Cadastrados</h6>
                                        <a href="{{route('site.admin.episodios.new',['cod_anime' => $cod_anime, 'cod_temporada'=> $cod_temporada])}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-plus fa-sm text-white-50"></i> Novo Episodio</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Nome Episodio</th>
                                                    <th>Foto</th>
                                                    <th>Numero do Episodio</th>
                                                    <th>visualizações</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Nome Episodio</th>
                                                    <th>Foto</th>
                                                    <th>Numero do Episodio</th>
                                                    <th>visualizações</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                        @if(isset($episodios) && $episodios->count() > 0)
                                            @foreach ($episodios as $episodio)                                           
                                                <tr>
                                                    <td>{{$episodio->cod_episodio}}</td>
                                                    <td>{{$episodio->nome}}</td>
                                                    <td>{{$episodio->foto}}</td>
                                                    <td>{{$episodio->num_ep}}</td>
                                                    <td>{{$episodio->visualizacoes}}</td>
                                                    <td>
                                                        <a href="{{route('site.admin.episodios.edit', ['cod_anime' => $cod_anime, 'cod_temporada'=> $cod_temporada, 'cod_episodio'=>$episodio['cod_episodio']])}}" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                        <a href="{{route('site.admin.episodios.edit', ['cod_anime' => $cod_anime, 'cod_temporada'=> $cod_temporada, 'cod_episodio'=>$episodio['cod_episodio']])}}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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