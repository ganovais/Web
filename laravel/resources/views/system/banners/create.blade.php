@extends('system.layout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Banners</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/sistema') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{ url('/sistema/banners') }}">Banners</a>
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
                                        <label for="name">Imagem</label>
                                        <input type="file" class="form-control" name="image" id="image_input">
                                        <img id="banner_image" src="" width="200">
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
    const PATH_URL = '{{ url('/') }}';
    let title_input = document.querySelector('#title_input');
    let description_input = document.querySelector('#description_input');
    let image_input = document.querySelector('#image_input');

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
        fetch(`${BASE_URL}banners/${id}`)
            .then(response => response.json())
            .then(data => {
                if (!data.error) {
                    $('#title_input').val(data.banner.title);
                    description_input.value = data.banner.description;
                    // Added and change './' to '/' in table images collunm path DB
                    document.querySelector('#banner_image').src = PATH_URL + data.banner.image.path;

                    document.querySelector('#title').innerHTML = 'Editando - ' + data.banner.title;
                }
            })

        return false;
    }

    function storeOrUpdate(id) {
        let url = `${BASE_URL}banners`;
        let method = 'POST';

        if (id) {
            url = `${BASE_URL}banners/` + id;
            method = 'POST';
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });


        var formData = new FormData($('form#save')[0]);

        $.ajax({
            url: url,
            type: method,
            data: formData,
            success: function (data) {
                
                if (!id && (typeof data.error !== 'undefined' && !data.error)) {
                    window.location.href = BASE_URL + 'banners';
                }
                if (typeof data.error !== 'undefined' && !data.error) {
                    toastr.success(data.message);
                    get(id);
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