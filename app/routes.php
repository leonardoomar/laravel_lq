<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('ppal');
});

Route::get('altaPaciente', function()
{
    return View::make('frm-nuevoPaciente');
});
Route::post('altaPaciente', 'transaccionController@nuevoPaciente');


Route::get('bajaPaci', function()
{
	return View::make('frm-bajaPaciente');
});
Route::post('bajaPaci', 'transaccionController@bajaPaciente');

Route::get('buscaPaci', function()
{
	return View::make('frm-buscaDniPaci');
});
Route::post('buscaPaci', 'transaccionController@buscaPaciente');

Route::get('modifPaci', function()
{
	return View::make('frm-modifPaci');
});
Route::post('modifPaci', 'transaccionController@actualizaPaciente');

Route::get('jsonPaci', function()
{
	return View::make('lst-jsonPaci');
});
Route::get('jsonPaci', 'transaccionController@aJson');