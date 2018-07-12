<?php

use Illuminate\Http\Request;
use App\Tool; //utilitzem el metode tool
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::get('hola', function () {
    //return response(['hola'],200);
    return view(view:"demo.index");
})->middleware('auth:api');
*/

Route::get('hola', function () {
    //return response(['hola'],200);
    $tools = Tool::all();
    // retornando una vista
    //return view("demo.index");
    //retornando vista en json
    //return $tools;
    //retornando una vista con parametros
    return view('demo.index')->with('tools1',$tools);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
