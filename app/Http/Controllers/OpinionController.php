<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpinionController extends Controller
{
    /**
     * Add a comment on an opinion
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function comment(Request $request, int $id): RedirectResponse
    {
        $opinion = Opinion::find($id);
        $opinion->comments()->attach(Auth::user(), ['comment' => $request->input('opinion'), 'points' => 1]);
        return redirect()->route('home')->with('success');
    }
}
