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

//retorna empresa i eines de la empresa
Route::get('factoryAndTools', function () {
    //$tools = Tool::all();
    
    //agafem les empreses
    $factories = App\Companie::all();
    //recorrem las empresas per veure la seva ID
    
    $array_empresas = [];
    foreach ($factories as $factory) 
    {
        array_push($array_empresas,$factory->id);
        
        //busquem tools de l'empresa
        $tools = DB::table('tools')->where('company_id', $factory->id)->get();
        $array_empresas[$factory->id] = [$tools];
    }
    


    return $array_empresas;
    //vista
    //return view('demo.factoryAndTools')->with('tools1',$tools);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
