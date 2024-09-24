@extends('site.layouts.basic')
@section('conteudo')

<!-- Sessao de registro -->
<section class="vh-100" style="background-image: url('{{ asset('Images/background/banner.jpg') }}')">
  <div class="container p-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card border-dark bg-dark text-info" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white mb-5">Entre com seu email e senha!</p>

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
              
              {{-- Formulario de login --}}
              <form action="{{route('site.login')}}" method="post">
                @csrf
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" name = "email" id="typeEmailX" placeholder="E-mail" class="form-control rounded-0 form-control-lg" required/>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" name = "password"  id="typePasswordX" placeholder="Senha" class="form-control rounded-0 form-control-lg" required/>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#!">Esqueceu a senha?</a></p>
              <div class="d-grid gap-2">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-info btn-lg px-5" type="submit">Login</button>
              </div>
            </div>
            </form>
            {{-- Fim do formulario de login --}}

            <div>
              <p class="mb-0">Não tem uma conta? <a href="{{route('site.registrar')}}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Criar Conta</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection