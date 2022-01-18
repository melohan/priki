<article class="w-5/5 shadow rounded-md text-gray-800 mb-5 border">
    <div class="h-10 bg-gray-100 rounded-t-md p-2 flex space-x-80 px-4 ">
        <div class="w-4/6"><h1 class="font-bold text-lg ">
                {{$comment->name}}  ({{$comment->pivot->points}})
            </h1>
        </div>
    </div>
    <div class="rounded-b-md bg-gray-50 p-4 divide-y">
        {{$comment->pivot->comment}}
    </div>
</article>
