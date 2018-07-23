<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//rutas web
Route::get('admin','HomeController@adminView')->middleware('auth:web');
Route::get('magatzem','HomeController@magatzemView')->middleware('auth:web');
Route::get('employee','HomeController@employeeView')->middleware('auth:web');
//pagina per la creacio de noves empreses
Route::get('superadmin','HomeController@superadminView')->middleware('auth:web');


Route::post('newcompany','CompaniesController@newcompanyB')->middleware('auth:web');