<!doctype html>
<html>
<head>
    <title>Priki</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{asset("css/app.css") }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla {
            font-family: karla;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body class="bg-white font-family-karla">

<!-- Top Bar Nav -->
@include('layouts.front-navigation')
<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-600 uppercase hover:text-gray-400 text-5xl" href="/">
            Priki
        </a>
        <p class="text-lg text-gray-600">
        </p>
    </div>
</header>

</nav>

<div class="container mx-auto flex flex-wrap py-6">
    <!-- Posts Section -->
    <div class="w-full  flex flex-col items-center px-3">
        @show
        @yield('content')
    </div>
</div>

<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
@livewireScripts
</body>
</html>
