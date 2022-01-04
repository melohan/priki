<nav class="w-full py-4 2xl bg-purple-300 shadow">


    <div class="w-full container mx-auto flex flex-wrap justify-end">
        <livewire:practice.dropdown-menu/>
    @if(is_null(Auth::user()))
            <!-- Login -->
            <div class="flex items-end text-lg no-underline text-white pr-6">
                <a class="" href="{{route('login')}}">
                    <i class="fas fa-sign-in-alt"></i>&nbsp; Se connecter
                </a>
            </div>
            <!-- Register -->
            <div class="flex items-end text-lg no-underline text-white pr-6">
                <a class="" href="{{route('register')}}">
                    <i class="fas fa-pen-nib"></i>&nbsp; S'inscrire
                </a>
            </div>
    @else
        <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <div class="flex items-end text-lg no-underline text-white pr-6">
                            <div>{{ Auth::user()->name }} ({{ Auth::user()->fullname }})</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
    @endif

    <!-- Home -->
        <div class="flex items-end text-lg no-underline text-white pr-6">
            <a class="" href="{{route('home')}}">
                <i class="fa fa-building"></i>&nbsp; PRIKI
            </a>
        </div>
    </div>
</nav>
