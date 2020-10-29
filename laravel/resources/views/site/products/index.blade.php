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
                            <input type="text" class="form-control" placeholder="Pesquisar..." />
                            <div class="input-group-append">
                                <span class="input-group-text" id="filter-search">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="filter-categories">
                        <h4>Categorias</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cate1" />
                            <label class="form-check-label" for="cate1"> Categoria </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cate2" />
                            <label class="form-check-label" for="cate2"> Categoria </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cate3" />
                            <label class="form-check-label" for="cate3"> Categoria </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cate4" />
                            <label class="form-check-label" for="cate4"> Categoria </label>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-block button-theme">
                        Pesquisar
                    </button>
                </form>
            </div>
        </div>

        <div class="col-md-9 col-sm-12">
            <div class="row">
                @for($i=1; $i<=4; $i++)
                <div class="col-lg-4 col-md-6 col-6 mb-4">
                    @include('site.widgets.product', ['index' => $i])
                </div>
                @endfor
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