<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

//$router->get('user/{id}', 'UserController@show');

$router->get('/user/{id}', ['middleware' => 'auth', function (Request $request, $id) {
    $user = Auth::user();
    return "$user"."-"."$id";
}]);

$router->post('PostUser/', 'UserController@post');


