<?php

namespace App\Http\Controllers;

class UserController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(int $id)
    {
        return view('user.profile');
    }

}
