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
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantenha me logado</label>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
</div>

@endsection


