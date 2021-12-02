@extends('layout')
@section('content')

    <h1 class="text-xl" xmlns="http://www.w3.org/1999/html">Welcome</h1>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Date
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Description
        </th>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($data as $practice)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{$practice['created_at']->formatLocalized('%d %B %Y')}}</td>
                <td>{{$practice['description']}}</td>
            </tr>
        @endforeach
        </thead>
    </table>
@stop
