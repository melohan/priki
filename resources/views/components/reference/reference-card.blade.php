<div class="flex w-90 h-auto">
    <div
        class="shadow border border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">

                <span
                    class="inline-block bg-blue-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                 Référence
                </span>

            </p>
            <div
                class="text-gray-900 font-bold text-xl mb-2">{{Str::limit($reference->description,100, ' ...')}}</div>

            <p class="text-gray-700 text-justify">
                {{$reference->description}}
            </p>
        </div>
        <div class="flex items-center">

            <div class="text-sm">
                <p class="text-gray-900 leading-none">
                    <a href="{{$reference->url}}">
                        <button
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 inline-flex items-center">
                            <span>Consult</span>
                        </button>
                    </a>
                </p>
            </div>
        </div>
    </div>
    </a>
</div>
