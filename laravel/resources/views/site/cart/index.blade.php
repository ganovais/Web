@extends('site.layout')

@section('title')
Esoftgraf | Carrinho
@endsection

@section('content')
<div class="container mt-5 mb-5">

    <div class="row">
        <!-- Lista dos Produtos-->
        <div class="col-9">
            <div class="row">
                <div class="col-3">
                    <span class="badge badge-theme badge-over-img">Categoria</span>
                    <img class="img-fluid" src="{{ asset('assets/images/products/2.jpg') }}" />
                </div>
                <div class="col-6 text-justify">
                    <h2>Chocolate Lacta</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, ex totam omnis in, quam
                        eveniet placeat culpa magni fuga optio minima consequuntur!</p>
                    <p class="text-orange fs-20"><b>R$ 7,00</b></p>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="quantity">Quantidade:</label>
                        <div>
                            <input type="number" id="quantity" name="quantity" min="1" max="10000">
                        </div>
                        <a href="#">Remover</a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-3">
                    <span class="badge badge-theme badge-over-img">Categoria</span>
                    <img class="img-fluid" src="{{ asset('assets/images/products/2.webp') }}" />
                </div>
                <div class="col-6 text-justify">
                    <h2>Danone</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, ex totam omnis in, quam
                        eveniet placeat culpa magni fuga optio minima consequuntur!</p>
                    <p class="text-orange fs-20"><b>R$ 5,00</b></p>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="quantity">Quantidade:</label>
                        <div>
                            <input type="number" id="quantity" name="quantity" min="1" max="10000">
                        </div>
                        <a href="#">Remover</a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-3">
                    <span class="badge badge-theme badge-over-img">Categoria</span>
                    <img class="img-fluid" src="{{ asset('assets/images/products/3.webp') }}" />
                </div>
                <div class="col-6 text-justify">
                    <h2>Ruffles</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, ex totam omnis in, quam
                        eveniet placeat culpa magni fuga optio minima consequuntur!</p>
                    <p class="text-orange fs-20"><b>R$ 4,00</b></p>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="quantity">Quantidade:</label>
                        <div>
                            <input type="number" id="quantity" name="quantity" min="1" max="10000">
                        </div>
                        <a href="#">Remover</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <!-- Fim Lista dos Produtos-->

        <!-- Subtotal -->
        <div class="col-3">
            <div class="card card-cart" style="width: 300px;">
                <div class="card-body">
                    <h5 class="card-title">Subtotal</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Adicional Comentário:</h6>
                    <textarea name="comment-subtotal" class="form-control" id="" cols="30" rows="4"></textarea><br>
                    <h6 class="card-subtitle mb-2 text-muted">Aplicar Cupom:</h6>
                    <input type="text" class="form-control" placeholder="Digite seu cupom"><br>
                    <a href="{{ url('checkout') }}" class="btn btn-success btn-block">Ir para checkout</a>
                </div>
            </div>

        </div>
        <!-- Fim Subtotal -->
    </div>

</div>
@endsection