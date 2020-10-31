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
            <span class="badge badge-theme">Frutas</span>
            <span class="badge badge-theme">Legumes</span>
            <span class="badge badge-theme">Bolachas</span>
            <span class="badge badge-theme">Carnes</span>
            <span class="badge badge-theme">Refrigerantes</span>
        </div>
    </div>

    <!-- Produtos -->
    <div class="row">
        <div class="col-12 text-left mt-5 mb-3">
            <h1>Produtos</h1>
        </div>


        @for($i=1; $i<=4; $i++)
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            @include('site.widgets.product', ['index' => $i])
        </div>
        @endfor

    </div>
</div>
@endsection