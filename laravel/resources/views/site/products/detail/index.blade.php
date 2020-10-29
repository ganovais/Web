@extends('site.layout')

@section('title')
Mais sobre o produto - meu produto
@endsection

@section('content')

<div class="container mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-sm-12 col-md-4">
            <img class="product-img-detail img-fluid" src="./assets/images/products/coca.jpeg">
        </div>

        <div class="col-sm-12 col-md-8">
            <div class="product-header-detail mb-5">
                <h3 class="mb-0">Coca-Cola</h3>
                <span class="badge badge-theme">Categoria</span>
            </div>
            <div class="product-body-detail text-justify">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, ex totam omnis in, quam eveniet placeat culpa magni fuga optio minima consequuntur voluptatibus labore quidem earum pariatur. Deserunt, fuga accusamus!</p>

                <p class="text-orange fs-20"><b>R$ 7,00</b></p>
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

        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            <div class="product">
                <div class="product-header">
                    <div class="product-subheader">
                        <i class="p-2 fas fa-heart"></i>
                        <span class="badge badge-theme">Categoria</span>
                    </div>
                    <img class="img-fluid" src="./assets/images/products/chocolate.jpg" />
                </div>

                <div class="product-footer">
                    <p class="m-0">Chocolate</p>
                    <p class="pr-3 m-0"><b>R$ 5,00</b></p>
                    <i class="fas fa-cart-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            <div class="product">
                <div class="product-header">
                    <div class="product-subheader">
                        <i class="p-2 fas fa-heart"></i>
                        <span class="badge badge-theme">Categoria</span>
                    </div>
                    <img class="img-fluid" src="./assets/images/products/trigo.webp" />
                </div>

                <div class="product-footer">
                    <p class="m-0">Trigo</p>
                    <p class="pr-3 m-0"><b>R$ 3,00</b></p>
                    <i class="fas fa-cart-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            <div class="product">
                <div class="product-header">
                    <div class="product-subheader">
                        <i class="p-2 fas fa-heart"></i>
                        <span class="badge badge-theme">Categoria</span>
                    </div>
                    <img class="img-fluid" src="./assets/images/products/coca.jpeg" />
                </div>

                <div class="product-footer">
                    <p class="m-0">Coca</p>
                    <p class="pr-3 m-0"><b>R$ 7,00</b></p>
                    <i class="fas fa-cart-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
            <div class="product">
                <div class="product-header">
                    <div class="product-subheader">
                        <i class="p-2 fas fa-heart"></i>
                        <span class="badge badge-theme">Categoria</span>
                    </div>
                    <img class="img-fluid" src="./assets/images/products/oreo.jpg" />
                </div>

                <div class="product-footer">
                    <p class="m-0">Oreo</p>
                    <p class="pr-3 m-0"><b>R$ 3,00</b></p>
                    <i class="fas fa-cart-plus"></i>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection