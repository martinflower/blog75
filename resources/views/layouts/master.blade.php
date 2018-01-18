<!-- resources/views/layouts/master.blade.php -->
<html>
<head>
    <title>GTAS | @yield('title', 'Home Page')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
@section('footerScripts')
    <script src="app.js"></script>
@show
</body>
</html>