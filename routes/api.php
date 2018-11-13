<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List All
Route::get('employees','EmployeesController@index');
Route::get('churches','ChurchController@index');
Route::get('accounts','AccountsController@index');
Route::get('transfers','TransfersController@index');
Route::get('cvs','CvsController@index');
Route::get('logs','LogsController@index');
Route::get('churchlists','ChurchlistController@index');
Route::get('ministrylists','MinistrylistController@index');
Route::get('ministries','MinistriesController@index');

//List single
Route::get('employee/{id}','EmployeesController@show');
Route::get('church/{id}','ChurchController@show');
Route::get('account/{id}','AccountsController@show');
Route::get('transfer/{id}','TransfersController@show');
Route::get('cv/{id}','CvsController@show');
Route::get('log/{id}','LogsController@show');
Route::get('churchlist/{id}','ChurchlistController@show');
Route::get('ministrylist/{id}','MinistrylistController@show');
Route::get('ministry/{id}','MinistriesController@show');

//Create new
Route::post('employee','EmployeesController@store');
Route::post('church','ChurchController@store');
Route::post('account','AccountsController@store');
Route::post('transfer','TransfersController@store');
Route::post('cv','CvsController@store');
Route::post('log','LogsController@store');
Route::get('churchlist','ChurchlistController@store');
Route::get('ministrylist','MinistrylistController@store');
Route::get('ministry','MinistriesController@store');

//Update single
Route::put('employee','EmployeesController@store');
Route::put('church','ChurchController@store');
Route::put('account','AccountsController@store');
Route::put('transfer','TransfersController@store');
Route::put('cv','CvsController@store');
Route::put('log','LogsController@store');
Route::get('churchlist','ChurchlistController@store');
Route::get('ministrylist','MinistrylistController@store');
Route::get('ministry','MinistriesController@store');

//Delete single
Route::delete('employee/{id}','EmployeesController@destroy');
Route::delete('church/{id}','ChurchController@destroy');
Route::delete('account/{id}','AccountsController@destroy');
Route::delete('transfer/{id}','TransfersController@destroy');
Route::delete('cv/{id}','CvsController@destroy');
Route::delete('log/{id}','LogsController@destroy');
Route::get('churchlist/{id}','ChurchlistController@destroy');
Route::get('ministrylist/{id}','MinistrylistController@destroy');
Route::get('ministry/{id}','MinistriesController@destroy');
