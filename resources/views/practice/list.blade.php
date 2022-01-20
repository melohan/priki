<x-app-layout>

    <h1>Liste des pratiques</h1>
    <div class="grid grid-cols-3 gap-4 ">
        @for ($i = 0; $i < 9; $i++)
            <x-practice.practice-card :practice="$practice"/>
        @endfor
    </div>
</x-app-layout>
