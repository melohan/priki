<div class="font-normal">
    <button wire:click="display" class="font-bold p-1">Commentaires ({{$post->count()}})</button>
    @if($hide != true && $post->count()>0)
        <table class="table-auto mb-5">
            @foreach($post as $elem)
                <tr>
                    <td class="font-bold p-1">{{$elem->name}}</td>
                    <td class="p-1">
                        {{$elem->comment}}
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

