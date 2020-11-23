@extends('site.layout')

@section('title')
Esoftgraf | Checkout
@endsection

@section('content')
<div class="container mb-5 mt-5">
    <div class="row text">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="form-group">
                    <label><b>Nome completo</b></label>
                    <input type="text" class="form-control" placeholder="Digite o seu nome completo">
                </div>
                <div class="form-group">
                    <label><b>E-MAIL</b></label>
                    <input type="email" class="form-control" placeholder="Digite o seu e-mail">
                </div>
                <div class="row">
                    <div class="form-group col-3">
                        <label><b>DDD</b></label>
                        <input type="tel" class="form-control" placeholder="DDD">
                    </div>
                    <div class="form-group col-9">
                        <label><b>Telefone</b></label>
                        <input type="tel" class="form-control" placeholder="Telefone">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="form-group">
                    <label><b>Cartão</b></label>
                    <input type="text" class="form-control" placeholder="Digite o seu número completo">
                </div>
                <div class="form-group">
                    <label><b>Código de Verificação </b></label>
                    <input type="text" class="form-control" placeholder="Verifique o verso do seu cartão">
                </div>
                <div class="form-group">
                    <label><b>Data de validade</b></label>
                    <input type="text" class="form-control" placeholder="MM/AA">
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card">
                <h2>Resumo do pedido:</h2>
                <p><b>Valor da compra:</b> R$120,00</p>
                <p><b>Frete:</b> R$5,00</p>
                <p><b>Total:</b> R$125,00</p>
            </div>
        </div>
        <div class="col-12 text-right mt-3">
            <a href="{{ url('/produtos')}}" class="btn btn-primary">Continuar comprando</a>
            <a href="{{ url('/')}}" class="btn btn-danger">Cancelar a compra</a>
            <a href="{{ url('/obrigado')}}" class="btn btn-success">Finalizar a compra</a>

        </div>
    </div>
</div>
@endsection