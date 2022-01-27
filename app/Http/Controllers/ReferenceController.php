<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.reference.list', ['references' => Reference::all()]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.reference.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'description' => 'required|max:100|regex:/\s*(\S\s*){10,}/',
                'url' => 'nullable|url|unique:references',
            ], [
                'description.regex' => "La description doit dépasser 10 caractères!",
            ]);

            Reference::create([
                'description' => $validated['description'],
                'url' => $validated['url'],
            ]);

            return redirect(route('references.index'))->with('success', "La référence a été ajoutée!");
        } catch (QueryException $e) {
            Log::Error($e->getMessage());

            return redirect(route('references.index'))->with('error', "La référence n'a pas pu être créee.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reference $reference
     * @return \Illuminate\Http\Response
     * @throw NotImplementedException
     */

    public function show(Reference $reference)
    {
        throw new NotImplementedException();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Reference $reference
     * @return \Illuminate\Http\Response
     * @throw NotImplementedException
     */
    public function edit(Reference $reference)
    {
        throw new NotImplementedException();
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Reference $reference
     * @return \Illuminate\Http\Response
     * @throw NotImplementedException
     */
    public function update(Request $request, Reference $reference)
    {
        throw new NotImplementedException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Reference $reference
     * @return \Illuminate\Http\Response
     * @throw NotImplementedException
     */
    public function destroy(Reference $reference)
    {
        throw new NotImplementedException();
    }
}
