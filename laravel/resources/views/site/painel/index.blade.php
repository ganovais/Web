@extends('site.layout')

@section('title')
E-Softgraf | PAINEL
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">

        <div class="painel col-12 col-md-6 text-center">
            <a class="text-dark" href="{{ url('wishlist') }}">Favoritos</a>
        </div>

        <div class="painel col-12 col-md-6 text-center">
            <a class="text-dark" href="{{ url('pedidos') }}">Pedidos</a>
        </div>

        <div class="col-12 mt-3">
            <h3>Dados do usuário</h3>
            <p><b>Nome: </b>{{ $user->name }}</p>
            <p><b>E-mail: </b>{{ $user->email }}</p>
        </div>

        
    </div>
</div>
@endsection