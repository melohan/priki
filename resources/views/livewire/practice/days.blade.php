<div class="justify-center">
    <div>Nouveau de {{$count}} jours</div>
     <button class=" bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
            wire:click="decrement">
        <i class="fas fa-minus"></i>
    </button>
    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
            wire:click="increment">
        <i class="fas fa-plus"></i>
    </button>
</div>
