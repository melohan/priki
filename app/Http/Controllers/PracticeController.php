<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function domain(int $id = null)
    {
        $domain = Domain::find($id);
        \session(['domain'=>$domain]);
        $practices = isset($id) ? Practice::getPublishedPerDomain($id) : Practice::getPublished();
        return view('domain.practices', ['practices' => $practices, 'id' => $id]);
    }

    public function details(int $id)
    {
        return view('practice.details', ['practice' => Practice::getDetails($id)]);
    }

}
