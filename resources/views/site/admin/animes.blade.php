@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container-fluid">
        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card bg-dark border-dark mb-4 text-info">
                                <div class="card-header bg-dark py-3">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h6 class="m-0 font-weight-bold text-info">Animes Cadastrados</h6>
                                        <a href="{{route('site.admin.animes.new')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-plus fa-sm text-white-50"></i> Novo Anime</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Nome Anime</th>
                                                    <th>Foto</th>
                                                    <th>Banner</th>
                                                    <th>Data</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Nome Anime</th>
                                                    <th>Foto</th>
                                                    <th>Banner</th>
                                                    <th>Data</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                        @if(isset($animes) && $animes->count() > 0)
                                            @foreach ($animes as $anime)                                           
                                                <tr>
                                                    <td>{{$anime['cod_anime']}}</td>
                                                    <td>{{$anime['nome']}}</td>
                                                    <td>{{$anime['foto']}}</td>
                                                    <td>{{$anime['banner']}}</td>
                                                    <td>{{$anime['datatempo_criacao']}}</td>
                                                    <td>
                                                        <a href="{{route('site.admin.animes.edit', $anime['cod_anime'])}}" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                        <a href="{{route('site.admin.animes.delete', $anime['cod_anime'])}}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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