@extends('site.layout')

@section('title')
Conheça nossos produtos
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 d-none d-sm-block">
            <div class="filter">
                <form>
                    <div class="filter-header">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pesquisar..." name="title" />
                            <div class="input-group-append">
                                <span class="input-group-text" id="filter-search">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="filter-categories">
                        <h4>Categorias</h4>
                        @foreach($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="{{ $category->id }}" id="{{ $category->id }}" name="category"/>
                            <label class="form-check-label" for="{{ $category->id }}"> {{ $category->title }} </label>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="mt-3 btn btn-block button-theme">
                        Pesquisar
                    </button>
                </form>
            </div>
        </div>

        <div class="col-md-9 col-sm-12">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-6 mb-4">
                    @include('site.widgets.product', ['product' => $product])
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <div class="pagination">
                <div class="page">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="page">
                    <span>1</span>
                </div>

                <div class="page">
                    <span>2</span>
                </div>

                <div class="page">
                    <span>3</span>
                </div>
                <div class="page">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection