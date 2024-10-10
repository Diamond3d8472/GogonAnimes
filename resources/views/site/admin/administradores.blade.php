@extends('site.admin.layouts.basic')
@section('conteudo')
<div class="container-fluid">
        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card bg-dark border-dark mb-4 text-info">
                                <div class="card-header bg-dark py-3">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h6 class="m-0 font-weight-bold text-info">Administradores Cadastrados</h6>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-plus fa-sm text-white-50"></i> Novo administrador</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Username</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Username</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @if(isset($admins) && $admins->count() > 0)
                                                    @foreach ($admins as $admin)
                                                        @if($admin->tipo_de_acesso == 1)                                
                                                        <tr>
                                                            <td>{{$admin->cod_user}}</td>
                                                            <td>{{$admin->name}}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                        @endif
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