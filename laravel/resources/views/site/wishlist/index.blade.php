@extends('site.layout')

@section('title')
E-softgraf - Wishlist
@endsection

@section('content')
<div class="container">
    @if(Auth::user())
    <div class="row mt-5">
        @forelse($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            @include('site.widgets.product-wishlist', ['product' => $product])
        </div>
        @empty
        <h1>Lista de favoritos vazia</h1>
        @endforelse
    </div>
    @else
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h3>Por favor, realize seu login</h3>
            <a href="{{ url('login') }}">Login</a>
            <a href="{{ url('register') }}">Registrar</a>
        </div>
    </div>
    @endif

</div>
@endsection