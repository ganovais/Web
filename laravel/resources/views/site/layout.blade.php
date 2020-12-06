<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="_token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}" />
        <link rel="icon" href="{{ asset('/assets/logo/icon.png') }}" />
        <link href="{{ asset('system/plugins/toastr/toastr.css') }}" rel="stylesheet" />

        <title>@yield('title')</title>
    </head>
    <body>
        <div class="toaster d-none">
            <img id="toaster-img" src="">
            <div class="toaster-content"></div>
            <i class="fas fa-times"></i>
        </div>

        <div class="toaster-wishlist d-none">
            <p>Produto removido com sucesso</p>
            <i class="fas fa-times"></i>
        </div>
        
        @include('site.widgets.header')

        <section class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">

                    @foreach($banners as $k => $banner)
                    <div class="carousel-item {{ $k == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset($banner->image->path) }}" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $banner->title }}</h5>
                            <p>{{ $banner->description }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        @yield('content')

        @include('site.widgets.footer')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        @yield('script')

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/principal.js') }}"></script>
        <script src="{{ asset('system/plugins/toastr/toastr.min.js') }}"></script>
    </body>
</html>
