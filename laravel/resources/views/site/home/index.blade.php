@extends('site.layout')

@section('title')
E-Softgraf: Sua loja virtual
@endsection

@section('content')
<div class="container">
    <!-- Categorias badges -->
    <div class="row">
        <div class="col-sm-12 text-left mt-5">
            <h1 class="mb-0">Categorias</h1>
        </div>

        <div class="col-12 text-left mt-3">
            @foreach($categories as $category)
            <span class="badge badge-theme">
                <a class="text-light" href="{{ url('produtos?category=' . $category->id) }}">
                {{ $category->title }}
                </a>
            </span>
            @endforeach
        </div>
    </div>

    <!-- Produtos -->
    <div class="row">
        <div class="col-12 text-left mt-5 mb-3">
            <h1>Produtos</h1>
        </div>


        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            @include('site.widgets.product', ['product' => $product])
        </div>
        @endforeach

    </div>
</div>
@endsection