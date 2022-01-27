<x-app-layout>
    <h1 class="text-xl	">Liste des références</h1>
    <br>
    <a class="2xl:font-bold mx-8" href="{{route('references.create')}}">
        <button
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 inline-flex items-center">
            <span>Ajouter une référence</span>
        </button>
    </a>
    <br>
    <div class="w-5/6">
        <div class="grid grid-cols-3 gap-4 ">
            @foreach($references as $reference)
                <x-reference.reference-card :reference="$reference"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
