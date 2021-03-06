<?php

namespace App\Http\Controllers;


use App\Models\Domain;
use App\Models\Practice;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        $publishedOnly = !(!is_null(Auth::user()) && Auth::user()->role->slug = 'MOD');
        return view('practice.details', ['practice' => Practice::getDetails($id, $publishedOnly)]);
    }

    public function list()
    {
        return view('practice.list', ['domains' => Domain::all()]);
    }

    public function publish(Request $request, int $id): RedirectResponse
    {
        $practice = Practice::find($id);
        if ($request->user()->cannot('publish', $practice)) {
            abort(403);
        }

        $practice->publish();

        return redirect()->route('home')->with('success', __('business.practice.published'));
    }

    public function updateTitle(Request $request, int $id): RedirectResponse
    {

        $practice = Practice::find($id);
        // TODO apply update policy
        if ($request->user()->cannot('publish', $practice)) {
            abort(403);
        }

        // TODO add check for change reason reason
        $validator = Validator::make($request->all(), ['title' => 'required|min:3|max:40']);

        if (!$validator->fails()) {
            $practice->updateTitle($request->input('title'));
            return redirect()->route('home')->with('success', "Titre modifié");
        }
        return redirect()->route('details', $id)->with('error', "Le titre n'a pas pu être modifié..");
    }
}
