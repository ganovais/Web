<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('system/css/adminlte.min.css') }}">
    <link href="{{ asset('system/plugins/toastr/toastr.css') }}" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('system.widgets.header')

        @include('system.widgets.asidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('system.widgets.footer')
    </div>

    <script src="{{ asset('system/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('system/plugins/jquery-ui/jquery-ui.min.j') }}s"></script>
    <script src="{{ asset('system/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('system/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);

        toastr.options.closeButton = true;
        toastr.options.showEasing = 'swing';
        toastr.options.hideEasing = 'linear';
        toastr.options.closeEasing = 'linear';
        // toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})

        $(document).ready(function () {
            Inputmask().mask(document.querySelectorAll("input"));
        });
    </script>

    <script src="{{ asset('system/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('system/js/adminlte.js') }}"></script>
    <script src="{{ asset('system/js/demo.js') }}"></script>
</body>

</html>