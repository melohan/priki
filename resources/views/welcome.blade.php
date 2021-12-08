@extends('layout')
@section('content')
    <livewire:practice.days />

    @isset($data)
        <h1 class="text-xl" xmlns="http://www.w3.org/1999/html">Welcome</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50 text-center">
            <th scope="col" class="px-6 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">
                Date
            </th>
            <th scope="col" class="px-6 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">
                Description
            </th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($data as $practice)
                <td class="px-6 py-4 whitespace-nowrap">{{\Carbon\Carbon::parse($practice->created_at)->formatLocalized('%d %B %Y')}}</td>
                <td>{{$practice->description}}</td>
                </tr>
            @endforeach
            </thead>
        </table>
    @else
        <div class="px-4 py-3 leading-normal  border border-green-500 rounded-lg" role="alert">
            <p>Aucune pratique à afficher ici.</p>
        </div>
    @endif
@stop
