@extends('layouts.front')
@section('content')
    @if(count($practices)!=0)
        <div class="w-5/6  flex items-center  flex-col  place-content-center ">

            @foreach($practices as $practice)
                <article class="w-4/5 shadow rounded-md text-gray-800 mb-10">
                    <div class="h-10 bg-purple-200 rounded-t-md p-2 flex space-x-80 px-4 ">
                        <div class="w-4/6"><h1 class="font-bold text-lg ">
                                {{!isset($id)?$practice->name:Str::limit($practice->description,40, ' ...')}}
                            </h1>
                        </div>
                        <div class="w-2/6 text-right"><span class="italic font-medium">{{$practice->updated_at}}</span>
                        </div>
                    </div>
                    <div class="rounded-b-md bg-gray-50 p-4 ">
                        <p class="text-justify">{{$practice->description}}</p>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div class="w-5/6 bg-purple-100 border-l-4 border-purple-400 text-orange-700 p-4" role="alert">
            <p class="font-bold text-center">
                Aucune pratique à afficher ici.
            </p>
        </div>
    @endif
@stop
