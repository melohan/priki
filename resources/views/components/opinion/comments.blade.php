<article class="w-5/5 shadow text-gray-800 mb-5 border">
    <div class="h-10 bg-gray-100 p-2 flex space-x-80 px-4 ">
        <div class="w-4/6"><h1 class="font-bold text-lg text-gray-700">
                @if($comment->pivot->points === 1)
                    <i class="fas fa-thumbs-up"></i>
                @elseif($comment->pivot->points === 0)
                    <i class="fas fa-dot-circle"></i>
                @else
                    <i class="fas fa-thumbs-down"></i>
                @endif
                {{$comment->name}}
            </h1>
        </div>
    </div>
    <div class="bg-gray-50 p-4 divide-y">
        {{$comment->pivot->comment}}
    </div>
</article>
