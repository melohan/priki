<x-app-layout>
    <!-- Practice -->
    @if(!is_null($practice))
        <x-practice.practice-full :practice="$practice"/>

        <!-- Opinion -->

        @if(!is_null($practice->opinions))
            <x-opinion.opinion :practice="$practice"/>
        @endif
    @else
        <div class="w-5/6 bg-gray-700 border-l-4 border-gray-400 text-white p-4" role="alert">
        <p class="font-bold text-center">
                Aucune pratique à afficher ici.
            </p>
        </div>
    @endif
</x-app-layout>
