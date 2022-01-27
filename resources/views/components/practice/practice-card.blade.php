<div class="max-w-sm lg:max-w-full lg:flex">
    <a href="{{route('details' ,  ['id' => $practice->id])}}">
        <div
            class="shadow border border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">

                <span
                    class="inline-block bg-blue-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                    {{$practice->publicationState->name}}
                </span>

                </p>
                <div class="text-gray-900 font-bold text-xl mb-2">{{$practice->domain->name}}</div>

                <p class="text-gray-700 text-justify">
                    {{$practice->title}}
                </p>
            </div>
            <div class="flex items-center">

                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{$practice->user->name}}, ({{$practice->user->fullname}})</p>
                    <p class="text-gray-600">{{\Carbon\Carbon::parse($practice->created_at)->formatLocalized('%d %B %Y')}}</p>
                </div>
            </div>
        </div>
    </a>
</div>
