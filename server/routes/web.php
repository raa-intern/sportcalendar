<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParserController;

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

Route::get('/',         [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login',    [App\Http\Controllers\HomeController::class, 'login'])->name('login');
// Route::get('/laravel', function () {return view('welcome');});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();
    Route::get('/dashboard',            [AdminController::class, 'dashboard']);
    Route::get('/events',               [AdminController::class, 'events_list']);
    Route::get('/parser',               [AdminController::class, 'parser_list']);
    Route::get('/charts',               [AdminController::class, 'charts_list']);
    Route::get('/widgets',              [AdminController::class, 'widgets_list']);
    Route::get('/users',                [AdminController::class, 'users_list']);
    Route::get('/organizer',            [AdminController::class, 'organizer']);
	Route::get('/dashboard2',           [AdminController::class, 'dashboard2']);
	Route::get('/bells',                [AdminController::class, 'bells_list']);
    Route::get('/letters',              [AdminController::class, 'letters_list']);
    Route::get('/logs',                 [AdminController::class, 'logs_monitor']);  

    Route::get('/event/show/{id}',      [EventsController::class, 'event_show']); // +

	Route::post('/event/create/{id}',   [EventsController::class, 'event_create']);
	Route::put('/event/edit/{id}',      [EventsController::class, 'event_edit']);
	Route::any('/event/delete/{id}',    [EventsController::class, 'event_delete']);

    Route::get('/user/show/{id}',       [UsersController::class, 'user_show']);
    
   




