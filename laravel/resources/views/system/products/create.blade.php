@extends('system.layout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Produtos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/sistema') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{ url('/sistema/products') }}">Produtos</a>
                    </li>
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
                    <form method="POST" id="save" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Título</label>
                                        <input type="text" class="form-control" name="title" id="title_input"
                                            placeholder="Título">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Preço</label>
                                        <input type="number" class="form-control" name="price" id="price_input" placeholder="Preço">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Imagem</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Categoria</label>
                                        <select id="category_input" class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Descrição</label>
                                        <textarea id="description_input" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
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

<script type="text/javascript">
    const BASE_URL = '{{ url('/') }}/sistema/';
    let title_input = document.querySelector('#title_input');
    let price_input = document.querySelector('#price_input');
    let category_input = document.querySelector('#category_input');
    let description_input = document.querySelector('#description_input');

    document.addEventListener('DOMContentLoaded', function () {

        let url_arr = document.URL.split('/');
        let id = null;
        if (url_arr.length > 6) {
            id = parseInt(Number(url_arr[url_arr.length - 2]));
            if (id) {
                get(id);
            }
        }

        document.querySelector('#save').onsubmit = () => {
            if (id) {
                storeOrUpdate(id);
            } else {
                storeOrUpdate(0);
            }
            return false
        }
    })

    function get(id) {
        fetch(`${BASE_URL}products/${id}`)
            .then(response => response.json())
            .then(data => {
                if (!data.error) {
                    title_input.value = data.product.title;
                    price_input.value = data.product.price;
                    category_input.value = data.product.category_id;
                    description_input.value = data.product.description;

                    document.querySelector('#title').innerHTML = 'Editando - ' + data.product.title;
                }
            })

        return false;
    }

    function storeOrUpdate(id) {
        let url = `${BASE_URL}products`;
        let method = 'POST';
        if (id) {
            url = `${BASE_URL}products/` + id;
            method = 'PUT';
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        var formData = new FormData(document.querySelector('#save'));

        $.ajax({
            url: url,
            type: method,
            data: formData,
            success: function (data) {
                
                if (!id && (typeof data.error !== 'undefined' && !data.error)) {
                    window.location.href = BASE_URL + 'products';
                }
                if (typeof data.error !== 'undefined' && !data.error) {
                    toastr.success(data.message);
                    return;
                }
            },
            error: function (error) {
                console.warn(error);
                toastr.error(error.responseJSON);
            },
            cache: false,
            contentType: false,
            processData: false
        })

        return false;

    }
</script>

@endsection