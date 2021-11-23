@extends('layout')
<ul>
    @foreach(\App\Models\Domain::all() as $domain)
        <li>{{$domain['name']}}</li>
    @endforeach
</ul>
