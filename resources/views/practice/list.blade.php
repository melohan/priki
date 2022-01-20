<x-app-layout>
    <h1>Liste des pratiques</h1>
    <div class="w-5/6">
        @foreach($domains as $domain)
            <h1 class="2xl:font-bold text-gray-700 text-2xl text-left mt-6 mb-6">{{$domain->name}}</h1>
            <div class="grid grid-cols-3 gap-4 ">
                @foreach($domain->practices as $practice)
                    <x-practice.practice-card :practice="$practice"/>
                @endforeach
            </div>
        @endforeach
    </div>
</x-app-layout>
