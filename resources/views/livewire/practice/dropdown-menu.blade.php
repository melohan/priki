<!-- Dropdown menu -->
<div class="flex items-end text-lg no-underline text-white pr-6">
    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
            class="text-white-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-white md:p-0 font-medium flex items-center justify-between w-full md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
        Domaine
        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
        </svg>
    </button>
    <div id="dropdownNavbar"
         class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-1" aria-labelledby="dropdownLargeButton">
            <li>
                <a href="{{route('domain') }}"
                   class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Tous
                    ({{$totalPractices}})
                </a>
            </li>
            @if(!empty($domains))
                @foreach($domains as $domain)
                    <li>
                        <a href="{{route('domain.id' ,  ['id' => $domain->id])}}"
                           class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">{{$domain->name}}
                            ({{$domain->countPractices()->count }})
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
