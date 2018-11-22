<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

        <title>{{ config('app.name') }}</title>

        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ url('assets/js/modernizr.min.js') }}"></script>


    </head>

    <body class="fixed-left">

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        @yield('content')

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ url('assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/js/detect.js') }}"></script>
        <script src="{{ url('assets/js/fastclick.js') }}"></script>
        <script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ url('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ url('assets/js/waves.js') }}"></script>
        <script src="{{ url('assets/js/wow.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ url('assets/js/script.js') }}"></script>

        <script src="{{ url('assets/js/jquery.core.js') }}"></script>
        <script src="{{ url('assets/js/jquery.app.js') }}"></script>

    </body>
</html>