<html>

<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>
    <!-- Include roboto.css to use the Roboto web font, material.css to include \
    the theme and ripples.css to style the ripple effect -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/roboto.min.css" rel="stylesheet') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material.min.css" rel="stylesheet') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/ripples.min.css" rel="stylesheet') !!}">
    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script>
        $(document).ready(function() {
// This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>
</head>
<body>
@include('shared.navbar')
@yield('content')
</body>
</html>