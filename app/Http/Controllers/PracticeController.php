<?php

namespace App\Http\Controllers;


use App\Models\Domain;
use App\Models\Practice;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class PracticeController extends Controller
{
    public function domain(int $id = null)
    {
        $domain = Domain::find($id);
        \session(['domain' => $domain]);
        $practices = isset($id) ? Practice::getPublishedPerDomain($id) : Practice::getPublished();
        return view('domain.practices', ['practices' => $practices, 'id' => $id]);
    }

    public function details(int $id)
    {
        return view('practice.details', ['practice' => Practice::getDetails($id)]);
    }

    public function list()
    {
        return view('practice.list', ['practice' => Practice::all()]);
    }

}
