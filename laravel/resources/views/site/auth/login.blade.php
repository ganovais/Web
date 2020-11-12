@extends('site.auth.layout')

@section('title')
E-Softgraf: Sua loja virtual
@endsection

@section('style')
<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
    }
</style>
@endsection

@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col-md-6 col-12 offset-md-3">
            <h3>Acesse sua conta</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantenha me logado</label>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            <a href="{{ route('password.request') }}">
                Esqueceu a senha?
            </a>
            <a href="{{ route('register') }}">Criar sua conta</a>
        </div>
    </div>
</div>

@endsection


