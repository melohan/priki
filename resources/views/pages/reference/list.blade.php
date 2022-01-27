<x-app-layout>
    <h1>Liste des références</h1>
    <div class="w-5/6">
        <div class="grid grid-cols-3 gap-4 ">
            @foreach($references as $reference)
                <x-reference.reference-card :references="$references"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
