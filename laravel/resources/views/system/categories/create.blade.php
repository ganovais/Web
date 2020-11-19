@extends('system.layout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categorias</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/sistema') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{ url('/sistema/categories') }}">Categorias</a>
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
                    <form method="POST" id="save">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Título</label>
                                        <input type="text" class="form-control" name="title" id="title_input" placeholder="Título">
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

<script>
    const BASE_URL = '{{ url('/') }}/sistema/' ;
    let title_input = document.querySelector('#title_input');

    document.addEventListener('DOMContentLoaded', function() {
        
        let url_arr = document.URL.split('/');

        let id = null;
        if(url_arr.length > 6) {
            id = parseInt(Number(url_arr[url_arr.length - 2]));
            get(id);
        }

        document.querySelector('#save').onsubmit = () => {
            if(id) {
                storeOrUpdate(id);
            } else {
                storeOrUpdate(0);
            }
            return false;
        }
    })

    function get(id) {
        fetch(`${BASE_URL}categories/${id}`)
        .then(response => response.json())
        .then(data => {
            if(!data.error) {
                title_input.value = data.category.title;
                document.querySelector('#title').innerHTML = 'Editando - ' + data.category.title;
            }
        })
            
        return false;
    }

    function storeOrUpdate(id) {
        let url = `${BASE_URL}categories`;
        let method = 'POST';
        if(id) {
            url = `${BASE_URL}categories/` + id;
            method = 'PUT';
        }

        fetch(url, {
            method: method,
            headers: {
                "Content-Type": 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.getElementsByName('_token')[0].value,
            },
            body: JSON.stringify({
                title: title_input.value,
            })
        })
        .then(response => response.json())
        .then(data => {
            if(!id && (typeof data.error !== 'undefined' && !data.error)) {
                window.location.href = BASE_URL + 'categories';
            }
            if(typeof data.error !== 'undefined' && !data.error) {
                toastr.success(data.message);
                return;
            }

            toastr.error(data);

        }).catch(error => {
            console.log(error);
        })
    }
</script>

@endsection