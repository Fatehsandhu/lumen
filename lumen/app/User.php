<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show($id)
    {
        $query = app('db')->select("SELECT * FROM users.users WHERE id = {$id}");
        return $query;
    }

    public function post(Request $request) {

        $name = $request->input('name');
        $age = $request->input('age');

        app('db')->insert('insert into users (id, name, age) values (?, ?, ?)', [NULL,$name, $age]);
        $query = app('db')->select("SELECT * FROM users.users");
        return $query;

    }


}
