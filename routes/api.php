<?php

namespace App\Models\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/files/{type}/{id?}', 'FileController@index');
Route::get('/api/tasks/download/{id}' , 'FileController@getFile')->name('getfile');
Route::post('/files/add', 'FileController@store');
Route::post('/files/edit/{id}', 'FileController@edit');
Route::post('/files/delete/{id}', 'FileController@destroy');
