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
        <table class="min-w-full table-auto">
            <thead class="justify-between  border-4 border-purple-200">
            <tr class="bg-purple-200">
                <th class="py-1 w-auto w-1/3">
                    Date
                </th>
                <th class="py-1 w-auto 2-2/3">
                    Description
                </th>
            </tr>
            </thead>
            <tbody class="bg-gray-200">
            @foreach($practices as $practice)
                <tr class="bg-white border-4 border-gray-200">
                    <td class="text-center align-middle px-12 py-2 items-center border-2 align-top">{{\Carbon\Carbon::parse($practice->created_at)->formatLocalized('%d %B %Y')}}</td>
                    <td class="align-middle px-12 py-2 items-center border-2 "><p
                            class="text-justify">{{Str::limit($practice->description,255, ' ...')}}</p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
