@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container-fluid">
        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card bg-dark border-dark mb-4 text-info">
                                <div class="card-header bg-dark py-3">
                                    <h6 class="m-0 font-weight-bold text-info">Ultimos Comentarios</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Comentario</th>
                                                    <th>Code Anime</th>
                                                    <th>Data</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Comentario</th>
                                                    <th>Code Anime</th>
                                                    <th>Data</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                 @if(isset($comentarios) && $comentarios->count() > 0)
                                                    @foreach ($comentarios as $comentario)                                           
                                                        <tr>
                                                            <td>{{$comentario['cod_comentario']}}</td>
                                                            <td>{{$comentario['comentario']}}</td>
                                                            <td>{{$comentario['episodio_cod_episodio']}}</td>
                                                            <td>{{$comentario['datatempo_criacao']}}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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