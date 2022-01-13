<div class="w-5/6">

    <div class="bg-purple-100 border-l-4 border-purple-400 text-orange-700 p-4" role="alert">
        <p class="font-bold text-center">
            @if(count($practices)!=0)
                Nouveau de {{$days}} jours.
            @else
                Aucune pratique à afficher ici.
            @endif
        </p>
    </div>


    <div class="flex w-1/3 m-auto align-middle mt-5">
        <div class="flex-auto w-2/4 h-10 text-right pr-1">
            <label class="inline-block mt-2 right-0">Afficher les derniers</label>
        </div>
        <div class="flex-auto w-1/6 h-10 left-0">
            <input wire:model="days" id="jours" type="number" placeholder="days"
                   class="shadow appearance-none border rounded w-full py-2 px-1 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex-auto w-2/6 align-middle pl-1 h-10">
            <label class="inline-block mt-2">
                jours
            </label>
        </div>
    </div>

    <br>
    @if(count($practices)!=0)
        @foreach($practices as $practice)
            <x-practice.practice-min :practice="$practice"/>
        @endforeach
    @endif
</div>
