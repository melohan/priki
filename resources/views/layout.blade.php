<!-- resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>App Name - @yield('title')</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
