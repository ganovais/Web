<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}" />
        <link rel="icon" href="{{ asset('/assets/logo/icon.png') }}" />
        <title>@yield('title')</title>

        @yield('style')
    </head>
    <body>
        <div class="toaster d-none">
            <img id="toaster-img" src="">
            <div class="toaster-content"></div>
            <i class="fas fa-times"></i>
        </div>
        
        @include('site.widgets.header')

        @yield('content')

        @include('site.widgets.footer')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/principal.js') }}"></script>
    </body>
</html>
