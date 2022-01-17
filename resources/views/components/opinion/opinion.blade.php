<article class="w-4/5 shadow rounded-md text-gray-800 mb-10">
    <div class="h-10 bg-gray-100 rounded-t-md p-2 flex space-x-80 px-4 ">
        <div class="w-4/6"><h1 class="font-bold text-lg ">
                Opinions
            </h1>
        </div>
    </div>
    @foreach($practice->opinions as $opinion)
        <div class="rounded-b-md bg-gray-50 p-4 divide-y">
            <table class="table-auto mb-5">
                <tr>
                    <td class="font-bold p-1">Auteur</td>
                    <td class="p-1">
                        <a class="underline"
                           href="{{route('profile' ,  ['id' => $opinion->user->id])}}">{{$opinion->user->name}}</a>
                    </td>
                </tr>
                <tr>
                    <td class="font-bold p-1">Date de création</td>
                    <td class="p-1">{{\Carbon\Carbon::parse($opinion->created_at)->formatLocalized('%d %B %Y')}}</td>
                </tr>
                <tr>
                    <td class="font-bold p-1">Date de modification</td>
                    <td class="p-1">{{\Carbon\Carbon::parse($opinion->updated_at)->formatLocalized('%d %B %Y')}}</td>
                </tr>
                <tr>
                    <td class="font-bold p-1">Description</td>
                    <td><p class="text-justify">{{$opinion->description}}</p></td>
                </tr>
                <tr>
                    <td class="font-bold p-1">Votes</td>
                    <td class="p-1">(+) {{$opinion->upvotes()}} (-) {{$opinion->downvotes()}}</td>
                </tr>
                <tr>
                    <td colspan="2" class="font-bold p-1">
                    <!-- TODO display comment -->
                    </td>
                </tr>
            </table>

        </div>
    @endforeach
</article>
