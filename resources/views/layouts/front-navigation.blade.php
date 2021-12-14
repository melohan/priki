<nav class="w-full py-4 2xl bg-purple-300 shadow">


    <div class="w-full container mx-auto flex flex-wrap justify-end">
        <livewire:practice.dropdown-menu/>

        <!-- Login -->
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="{{route('login')}}">
                <i class="fas fa-sign-in-alt"></i>&nbsp; Se connecter
            </a>
        </div>
        <!-- Register -->
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="{{route('register')}}">
                <i class="fas fa-pen-nib"></i>&nbsp; Register
            </a>
        </div>
        <!-- Home -->
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="{{route('home')}}">
                <i class="fa fa-building"></i>&nbsp; PRIKI
            </a>
        </div>
    </div>
</nav>
