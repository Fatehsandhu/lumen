<?php

namespace App\Http\Controllers;

use App\User;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getUser()
    {
        $data  = User::all();
        return $data;
    }

    //
}
