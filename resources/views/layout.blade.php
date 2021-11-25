<!doctype html>
<html>
<head>
    <title>App Name - @yield('title')</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/tailwind/tailwind.css" rel="stylesheet">
    <!-- ... -->
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
@section('sidebar')
    This is the master sidebar.
@show
@yield('content')
</body>
</html>
