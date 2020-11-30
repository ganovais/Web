@extends('site.layout')

@section('title')
Mais sobre o produto - meu produto
@endsection

@section('content')

<div class="container mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-sm-12 col-md-4">
            <img class="product-img-detail img-fluid" src="{{ asset($product->image->path) }}">
        </div>

        <div class="col-sm-12 col-md-8">
            <div class="product-header-detail mb-5">
                <h3 class="mb-0">{{ $product->title }}</h3>
                <span class="badge badge-theme">{{ $product->category->title }}</span>
            </div>
            <div class="product-body-detail text-justify">
                <p>{{ $product->description }}</p>

                <p class="text-orange fs-20"><b>R$ {{ $product->price }}</b></p>
            </div>
            <div class="product-footer-detail">
                <button class="btn btn-primary">
                    Adicionar ao carrinho
                    <i class="fas fa-cart-plus"></i>
                </button>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12 mb-3">
            <h2>Produtos relacionados</h2>
        </div>

        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            @include('site.widgets.product', ['product' => $product])
        </div>
        @endforeach

    </div>

</div>

@endsection