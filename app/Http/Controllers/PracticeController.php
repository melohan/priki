<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;
use Illuminate\Support\Str;

class PracticeController extends Controller
{
    public function domain(int $id = null)
    {
        $practices = isset($id) ? Practice::getPublishedPerDomain($id) : Practice::getPublished();
        return view('practice-per-domain', ['practices' => $practices, 'id' => $id]);
    }

}
