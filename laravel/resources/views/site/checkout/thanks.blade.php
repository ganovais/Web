@extends('site.layout')

@section('title')
Esoftgraf - OBRIGADO!
@endsection

@section('content')
<div class="container mb-5 mt-5">

    <div class="row">
        <div class="col-12 mb-5">
            <h2>Obrigado pela sua compra :) </h2>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-3">
                    <img class="img-fluid" src="{{ asset('assets/images/products/2.jpg') }}" />
                </div>
                <div class="text-justify col-6">
                    <h4>Chocolate Lacta</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid numquam
                        dignissimos, quibusdam consectetur distinctio expedita vitae quia perferendis, reiciendis
                        voluptates harum illo totam soluta veniam debitis laboriosam tempore delectus</p>
                    <p class="pr-3 m-0"><b>R$ 10,00</b></p>
                </div>
                <div class="col-3">
                    <b>Quantidade</b>: 2

                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-3">
                    <img class="img-fluid" src="{{ asset('assets/images/products/2.jpg') }}" />
                </div>
                <div class="text-justify col-6">
                    <h4>Chocolate Lacta</h4>
                    <p>LLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid numquam
                        dignissimos, quibusdam consectetur distinctio expedita vitae quia perferendis, reiciendis
                        voluptates harum illo totam soluta veniam debitis laboriosam tempore delectus</p>
                    <p class="pr-3 m-0"><b>R$ 10,00</b></p>
                </div>
                <div class="col-3">
                    <b>Quantidade</b>: 2

                </div>
            </div>
        </div>
    </div>
</div>

@endsection