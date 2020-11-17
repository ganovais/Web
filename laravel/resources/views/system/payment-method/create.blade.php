@extends('system.layout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Métodos de pagamentos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/sistema') }}">Home</a></li>
                    <li class="breadcrumb-item active">Métodos de pagamentos</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title" id="title">Cadastrando</h3>
                    </div>
                    <form method="POST" id="save">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome do método de pagamento">
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome do método de pagamento">
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#save').onsubmit = () => {
            let name = document.querySelector('#name').value;
            fetch('/esoftgraf/laravel/public/sistema/payment-methods', {
                method: 'POST',
                headers: {
                    "Content-Type": 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.getElementsByName('_token')[0].value,

                },
                body: JSON.stringify({
                    name: name,
                })
            })
            .then(response => response.json())
            .then(data => {
                if(!data.error) {
                    toastr.success(data.message);
                    name = '';
                }
                console.log(data);
            })
            
            return false;
        }
    })
</script>

@endsection