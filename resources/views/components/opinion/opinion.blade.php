@if(count($practice->opinions)>0)
    <article class="w-4/5 shadow text-gray-800 mb-10 border">
        <div class="h-10 bg-gray-100 p-2 flex space-x-80 px-4 ">
            <div class="w-4/6"><h1 class="font-bold text-lg ">
                    Opinions
                </h1>
            </div>
        </div>
        @foreach($practice->opinions as $opinion)
            <div class="bg-gray-50 p-4 divide-y">
                <table class="table-auto mb-5">
                    <tr>
                        <td class="font-bold p-1">Auteur</td>
                        <td class="p-1">
                            <a class="underline"
                               href="{{route('profile' ,  ['id' => $opinion->user->id])}}">{{$opinion->user->name}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold p-1">Référence(s)</td>
                        <td class="p-1">
                            @if ($opinion->references->isNotEmpty() && Auth::check())
                                {{--References list--}}
                                <dl>
                                    <dt class="subtitle is-5">Références</dt>
                                    @foreach($opinion->references as $reference)
                                        <dd>
                                            @if ($reference->url)
                                                <a href="{{ $reference->url }}" target="_blank">
                                                    {{ $reference->description }}
                                                </a>
                                            @else
                                                {{ $reference->description }}
                                            @endif
                                        </dd>
                                    @endforeach
                                </dl>
                            @endif
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
                        <td class="p-1">
                            <i class="fas fa-thumbs-up text-gray-700"></i> {{$opinion->upvotes()}}
                            <i class="fas fa-thumbs-down text-gray-700"></i> {{$opinion->downvotes()}}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="font-normal p-1">

                            <div x-data="{ open: false }">
                                <button class="font-bold" x-on:click="open = ! open" type="button">
                                    Commentaires
                                </button>

                                <div x-show="open">
                                    @foreach($opinion->comments as $comment)
                                        <x-opinion.comments :comment="$comment"/>
                                    @endforeach
                                    <x-opinion.comment-form :opinion="$opinion"/>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
        @endforeach
    </article>
@endif
