Nouveau de {{$days}} jours.
<br>
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">
        Afficher les derniers
    </label>
    <input
        wire:model="days"
        id="jours"
        type="text"
        placeholder="days"
        class="shadow appearance-none border rounded w-full py-2 px-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    >
    <label class="block text-gray-700 text-sm font-bold mb-2">
        jours
    </label>
</div>

<br>
@empty($practices)
    <p>Aucune pratique à afficher ici.</p>
@else
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 text-center">
        <th scope="col" class="px-6 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">
            Date
        </th>
        <th scope="col" class="px-6 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">
            Description
        </th>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($practices as $practice)
            <td class="px-6 py-4 whitespace-nowrap">{{\Carbon\Carbon::parse($practice->created_at)->formatLocalized('%d %B %Y')}}</td>
            <td>{{$practice->description}}</td>
            </tr>
        @endforeach
        </thead>
    </table>
@endif
