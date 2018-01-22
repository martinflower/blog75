<html>

<html lang="Fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>
    <!--<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material.min.css') !!}">
    <!-- Include roboto.css to use the Roboto web font, material.css to include \
    the theme and ripples.css to style the ripple effect -->
</head>
<body>
@include('shared.navbar')
@yield('content')
<script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<!-- <script src="{!! asset('js/material.min.js') !!}"></script>
<script>
    $(document).ready(function() {
// This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script> -->

</body>
</html>