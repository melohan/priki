@extends('layouts.front')
@section('content')

    @if(!is_null($practice))
        <!-- Practice -->
        <article class="w-4/5 shadow rounded-md text-gray-800 mb-10">
            <div class="h-10 bg-purple-200 rounded-t-md p-2 flex space-x-80 px-4 ">
                <div class="w-4/6"><h1 class="font-bold text-lg ">
                        {{Str::limit($practice->description,40, ' ...')}}
                    </h1>
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
        <!-- Opinion -->

        @if(!is_null($practice->opinions))
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
                                <td class="p-1">{{$opinion->user->name}}</td>
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
                        </table>

                    </div>
                @endforeach
            </article>
        @endif
    @else
        <div class="w-5/6 bg-purple-100 border-l-4 border-purple-400 text-orange-700 p-4" role="alert">
            <p class="font-bold text-center">
                Aucune pratique à afficher ici.
            </p>
        </div>
    @endif
@stop
