@extends('layouts.front')
@section('content')
    <!-- Practice -->
    @if(!is_null($practice))
        <x-practice.practice-full :practice="$practice"/>

        <!-- Opinion -->

        @if(!is_null($practice->opinions))
            <x-opinion.opinion :practice="$practice"/>
        @endif
    @else
        <div class="w-5/6 bg-purple-100 border-l-4 border-purple-400 text-orange-700 p-4" role="alert">
            <p class="font-bold text-center">
                Aucune pratique à afficher ici.
            </p>
        </div>
    @endif
@stop
