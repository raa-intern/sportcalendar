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
Route::get('/events', 'FrontController@show')->name('expenses.show');
Route::get('/event/{eventId}', 'FrontController@showitem')->name('expenses.showitem');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
    return ['token' => $token->plainTextToken]; });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function() {
        
    Route::get('/login', 'PartnersController');

    Route::post('partner/event', 'PartnersController@store')->name('expenses.store');
    Route::get('partner/event/{eventId}', 'PartnersController@show')->name('expenses.show');
    Route::put('partner/event/{eventId}', 'PartnersController@update')->name('expenses.update');
    Route::delete('partner/event/{eventId}', 'PartnersController@destroy')->name('expenses.destroy');

});
