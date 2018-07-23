<?php

use Illuminate\Http\Request;
//use App\Tool; //utilitzem el metode tool
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

//versio v1 de API en Laravel
Route::group(['prefix' => 'v1'], function() {
    //retorna totes les eines de l'usuari logejat
    Route::get('inventory','InventoryController@getInventory')->middleware('auth:api');
    //retorna totes les peticions que m'han fet a mi
    Route::get('petitions','PetitionsController@requestsHaveMadeMe')->middleware('auth:api');
    //retorna totes les eines amb les que es pot interactuar l'usuari
    Route::get('tools','ToolsController@iCanInteract')->middleware('auth:api');
    //retorna totes les peticions que he fet acceptades/cancelades/pendents
    Route::get('requests','RequestsController@requestIhaveMade')->middleware('auth:api');
    //resposta a una petició de eina amb id
    Route::post('petitions/{id}','PetitionsController@responseToToolRequest')->middleware('auth:api');
    //retorno info treballador amb id ( per generar trucada )
    Route::get('employees/{id}','EmployeesController@getInfo')->middleware('auth:api');
    //solicita una eina amb id
    Route::post('tools/{id}/request','ToolsController@requestAtool')->middleware('auth:api');
    //cancelem una petició pendent de contestar amb id
    Route::delete('requests/{id}','RequestsController@canelRequest')->middleware('auth:api');
});

//rutas per funcións superadmin
Route::group(['prefix' => 'superadmin'], function() {
    //retorna el llistat de totes les empresas
    Route::get('companies','SuperadminController@companieList')->middleware('auth:api');
    //retorna treballadors de una empresa amb {id}
    Route::get('employees','SuperadminController@employeeList')->middleware('auth:api');

    //ruta per formulari de compayia ... el llançem desde el mateix formulari ... probem sense ruta
    //ruta que redirigeix a una vista

});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
