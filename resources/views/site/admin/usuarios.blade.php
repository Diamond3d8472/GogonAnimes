@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container-fluid">
        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card bg-dark border-dark mb-4 text-info">
                                <div class="card-header bg-dark py-3">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h6 class="m-0 font-weight-bold text-info">Usuarios Cadastrados</h6>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-plus fa-sm text-white-50"></i> Novo Usuario</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Data</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Data</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @if(isset($usuarios) && $usuarios->count() > 0)
                                                    @foreach ($usuarios as $usuario)                                           
                                                        <tr>
                                                            <td>{{$usuario->cod_user}}</td>
                                                            <td>{{$usuario->name}}</td>
                                                            <td>{{$usuario->email}}</td>
                                                            <td>{{$usuario->created_at}}</td>
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