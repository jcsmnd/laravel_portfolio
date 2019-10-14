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

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('inventories', 'InventoryController@index');

Route::get('inventories/{id}', 'InventoryController@show');

Route::post('inventories', 'InventoryController@store');

Route::put('inventories', 'InventoryController@store');

Route::delete('inventories/{id}', 'InventoryController@destroy');