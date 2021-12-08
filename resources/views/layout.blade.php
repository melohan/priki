<!doctype html>
<html>
<head>
    <title>Priki</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/tailwind/tailwind.css" rel="stylesheet">
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

</head>
<body class="bg-white font-family-karla">

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-green-800 shadow">



    <div class="w-full container mx-auto flex flex-wrap justify-end">
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="/login">
                <i class="fas fa-sign-in-alt"></i>&nbsp; Login
            </a>
        </div>
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="/register">
                <i class="fas fa-pen-nib"></i>&nbsp; Register
            </a>
        </div>
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="/">
                <i class="fa fa-building"></i>&nbsp; PRIKI
            </a>
        </div>
    </div>
</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
            Priki
        </a>
        <p class="text-lg text-gray-600">
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
           @click="open = !open">
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div
            class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="/" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Home</a>
        </div>
    </div>
</nav>


<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full  flex flex-col items-center px-3">
        @show
        @yield('content')
    </section>


</div>

</body>
</html>
