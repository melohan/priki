<!-- Practice -->
<article class="w-4/5 shadow text-gray-800 mb-10">
    <div class="h-15 bg-gray-700 text-white p-2 flex space-x-80 px-4 ">

        <!-- Title update form -->
        <div class=" w-4/6">
            <h1 class="font-bold text-lg ">
                {{$practice->title}}
            </h1>
            <div x-data="{ open: false }">
                <button
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 "
                    x-on:click="open = ! open"
                    type="button">
                    Modifier
                </button>
                <div x-show="open">
                    <x-practice.update-title-form :practice="$practice"/>
                </div>
            </div>

        </div>


    </div>
    <div class="rounded-b-md bg-gray-50 p-4 ">
        <table class="table-auto mb-5">
            <tr>
                <td class="font-bold p-1">Domaine</td>
                @if(!is_null($practice->domain))
                    <td class="p-1">{{$practice->domain->name}}</td>
                @endif
            </tr>
            <tr>
                <td class="font-bold p-1">Auteur</td>
                <td class="p-1">{{$practice->user->fullname}}</td>
            </tr>
            <tr>
                <td class="font-bold p-1">Date de création</td>
                <td class="p-1">{{\Carbon\Carbon::parse($practice->created_at)->formatLocalized('%d %B %Y')}}</td>
            </tr>
            <tr>
                <td class="font-bold p-1">Date de modification</td>
                <td class="p-1">{{\Carbon\Carbon::parse($practice->updated_at)->formatLocalized('%d %B %Y')}}</td>
            </tr>
        </table>
        <p class="text-justify">{{$practice->description}}</p>
    </div>
</article>
