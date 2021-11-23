<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::get('/', 'EventsController@index')->name('expenses.all');

Route::post('admin/event', 'EventsController@store')->name('expenses.store');

Route::get('admin/event/{eventId}', 'EventsController@show')->name('expenses.show');

Route::put('admin/event/{eventId}', 'EventsController@update')->name('expenses.update');

Route::delete('admin/event/{eventId}', 'EventsController@destroy')->name('expenses.destroy');
