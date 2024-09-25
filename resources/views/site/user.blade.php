@extends('site.layouts.basic')
@section('conteudo')

<div class="container pt-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="m-0 font-weight-bold text-info">Editar Usuario </h5>
    </div>
     {{-- Sucessos de registro --}}
     @if (session()->has('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Sucesso</strong> {{session()->get('success')}}
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
   @endif

   {{-- Erros de login --}}
   @error('error')
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>Erro</strong> {{$message}}
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
   @enderror
   
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <div class="mb-4 d-flex justify-content-center">
            <div style="width: 150px; height: 150px; overflow: hidden;">
                <img id="selectedImage" class="img-fluid"  src="{{ asset(auth()->user()->foto_perfil != null ? 'storage/profiles/'.auth()->user()->cod_user.'/profile.png' : 'images/usuarios/default.png') }}?{{ time() }}"
                alt="example placeholder" style="width: 150px; height: 150px;"/>
            </div>
        </div>
            <div class="d-grid gap-2">
                <label class="btn btn-info text-white"  data-bs-toggle="modal" data-bs-target="#profilePhoto" >Alterar foto</label>
            </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <form action="{{route('site.editUser')}}" autocomplete="off" method="post">
                @csrf
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label text-white">Username</label>
                    <input type="text" name="name" class="form-control" placeholder="{{auth()->user()->name}}" value="{{auth()->user()->name}}" required>
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label text-white">Endereço de email</label>
                    <input type="email" name="email" class="form-control" placeholder="{{auth()->user()->email}}" value="{{auth()->user()->email}}" required>
                </div>
                <div class="d-grid gap-2 pt-3">
                    <button class="btn btn-success btn-lg" type="submit"> Salvar</button>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pt-2">
            <div class="d-grid gap-2">
                <button class="btn btn-info btn-lg text-white" data-bs-toggle="modal" data-bs-target="#alterarSenha">Alterar Senha</button>
                <a href="{{route('site.favoritos')}}" class="btn btn-info btn-lg text-white">Favoritos</a>
                <a href="{{route('site.index')}}" class="btn btn-danger btn-lg" type="submit">Voltar</a>
            </div>
        </div>
    </div><!-- row -->
</div><!-- container -->


<!-- Modal photo profile -->
<div class="modal fade" id="profilePhoto" tabindex="-1" aria-labelledby="profilePhoto" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-dark">
        <div class="modal-body">
            <div class="mb-2 d-flex justify-content-center">
                <div style="width: 300px; height: 300px; overflow: hidden;">
                    <img id="selectedBanner" class="img-fluid mx-auto d-block w-100" src="{{ asset(auth()->user()->foto_perfil != null ? 'storage/profiles/'.auth()->user()->cod_user.'/profile.png' : 'images/usuarios/default.png') }}?{{ time() }}"
                    alt="example placeholder" style="width: 100%; height: 100%; object-fit: cover;"/>
                </div>
            </div>
        <form method="POST" action="{{route('site.userPhoto')}}" enctype="multipart/form-data">
        @csrf
        <div class="d-grid gap-2">
            <label class="form-label btn btn-info text-white" for="image-input">Escolha a capa</label>
            <input type="file" class="d-none" name="image" id="image-input" onchange="displaySelectedImage(event, 'selectedBanner')" required>
        </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

{{-- Modal alterar Senha --}}
  <div class="modal fade" id="alterarSenha" tabindex="-1" aria-labelledby="alterarSenha" aria-hidden="true">
    <div class="modal-dialog" data-bs-theme="dark">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h1 class="modal-title text-white fs-5" id="exampleModalLabel">Alterar Senha</h1>
          <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('site.editUserPassword')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="password" class="col-form-label text-white">Senha Atual</label>
              <input type="password" name="old_password" class="form-control">
            </div>
            <hr class="border border-light border-2 opacity-70">
            <div class="mb-3">
                <label for="password" class="col-form-label text-white">Senha Nova</label>
                <input type="password" name="password" class="form-control">
              </div>
            <div class="mb-3">
              <label for="password" class="col-form-label text-white">Senha Nova Novamente</label>
              <input type="password" name="password_confirmation" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  
<script>

    function displaySelectedImage(event, elementId) {
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