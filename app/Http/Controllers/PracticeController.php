<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Models\Practice;
use Illuminate\Support\Str;
use MongoDB\Driver\Session;

class PracticeController extends Controller
{
    public function domain(int $id = null)
    {
        $domain = Domain::find($id);
        \session(['domain'=>$domain]);
        $practices = isset($id) ? Practice::getPublishedPerDomain($id) : Practice::getPublished();
        return view('practice-per-domain', ['practices' => $practices, 'id' => $id]);
    }

    public function details(int $id)
    {
        return view('practice-details', ['practice' => Practice::getDetails($id)]);
    }

}
