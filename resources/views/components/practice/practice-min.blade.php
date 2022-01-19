<!-- Practice -->
<article class="w-5/5 shadow text-gray-800 mb-10">
    <a href="{{route('details' ,  ['id' => $practice->id])}}">
        <div class="h-10 bg-gray-700 text-white p-2 flex space-x-80 px-4 ">
            <div class="w-5/6"><h1 class="font-bold text-lg ">
                    {{Str::limit($practice->description,40, ' ...')}}
                </h1>
            </div>
        </div>
        <div class="bg-gray-50 p-4 ">
            <table class="table-auto mb-5">
                <tr>
                    <td class="font-bold p-1">Domaine</td>
                    @if(!is_null($practice->domain))
                        <td class="p-1">{{$practice->domain->name}}</td>
                    @endif
                </tr>
                <tr>
                    <td class="font-bold p-1">Date de modification</td>
                    <td class="p-1">{{\Carbon\Carbon::parse($practice->updated_at)->formatLocalized('%d %B %Y')}}</td>
                </tr>
            </table>
            <p class="text-justify">{{Str::limit($practice->description,800, ' ...')}}</p>
        </div>
    </a>
</article>
