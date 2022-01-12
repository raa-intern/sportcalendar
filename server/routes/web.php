<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParserController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\BellsController;
use App\Http\Controllers\LettersController;

use App\Http\Controllers\Api\FrontController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/dashboarddefault', function() {return view('dashboarddefault');});

// Route::middleware(['auth:sanctum', 'verified'])
// ->get('/dashboard', function () {return view('dashboard');})->name('dashboard');

// Route::get('events/show', [FrontController::class, 'eventsShowAll']);

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    // Navigate sidebar dashboard
    Route::get('/dashboard',            [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/events',               [AdminController::class, 'events_list'])->name('events');
    Route::get('/parser',               [AdminController::class, 'parser_list'])->name('parser');
    Route::get('/charts',               [AdminController::class, 'charts_list'])->name('charts');
    Route::get('/widgets',              [AdminController::class, 'widgets_list'])->name('widgets');
    Route::get('/partners',             [AdminController::class, 'partners_list'])->name('partners');
    Route::get('/users',                [AdminController::class, 'users_list'])->name('users');
    Route::get('/organizer',            [AdminController::class, 'organizer'])->name('organizer');
	Route::get('/dashboard2',           [AdminController::class, 'dashboard2'])->name('dashboard2');
	Route::get('/bells',                [AdminController::class, 'bells_list'])->name('bells');

    // Manager methods
    Route::get('manager/dashboard3',       [ManagerController::class, 'dashboard3'])->name('dashboard3');
    Route::get('manager/gallery2',         [ManagerController::class, 'gallery2_list'])->name('gallery2');
    Route::get('manager/reports',          [ManagerController::class, 'reports_list'])->name('reports');
    Route::get('manager/report/show/{id}', [ManagerController::class, 'report_show_item'])->name('reports_item');
    Route::get('manager/invoices',         [ManagerController::class, 'invoices_list'])->name('invoices');
    // Logs list
    Route::get('/logs',                 [AdminController::class, 'logs_monitor']);
    // Events methods
    Route::get('/event/show/{id}',      [EventsController::class, 'event_show'])->name('event_show');
	Route::get('/event/create',         [EventsController::class, 'event_create'])->name('event_create');
	Route::post('/event/store',         [EventsController::class, 'event_store'])->name('event_store');
	Route::get('/event/edit/{id}',      [EventsController::class, 'event_edit'])->name('event_edit');
	Route::post('/event/save/{id}',     [EventsController::class, 'event_save'])->name('event_save');
	Route::any('/event/delete/{id}',    [EventsController::class, 'event_delete'])->name('event_delete');
    // Parser methods
    Route::get('/parser/show/{id}',     [ParserController::class, 'parser_show_item']);
    // Widgets methods
    Route::get('/widget/show/{id}',     [ReportsController::class, 'widget_show_item']);
    // Partners methods
    Route::get('/partner/show/{id}',    [PartnersController::class, 'partner_show_item']);
    // Manager methods
    Route::get('/todo/list',            [OrganizerController::class, 'todo_list']);
    // Bells methods
    Route::post('/bell/create',         [BellsController::class, 'bell_create']);
    Route::get('/bell/push',            [BellsController::class, 'bell_push']);
    Route::get('/bell/show/{id}',       [BellsController::class, 'bell_show_item']);
    Route::put('/bell/edit/{id}',       [BellsController::class, 'bell_edit_item']);
    Route::delete('/bell/delete/{id}',  [BellsController::class, 'bell_delete_item']);
    // Letters methods
    Route::get('/letters',                  [LettersController::class, 'letters_list'])->name('letters');
    Route::post('/letter/create',           [LettersController::class, 'letter_create']);
    Route::get('/letter/show/{id}',         [LettersController::class, 'letter_show_item']);
    Route::delete('/letter/delete/{id}',    [LettersController::class, 'letter_delete_item']);
    Route::get('/notes',                    [LettersController::class, 'notes_list'])->name('notes');
    Route::get('/recited',                  [LettersController::class, 'recited_list'])->name('recited');
    Route::get('/sent',                     [LettersController::class, 'sent_list'])->name('sent');
    Route::get('/archive',                  [LettersController::class, 'archive_list'])->name('archive');
    Route::get('/indicated',                [LettersController::class, 'indicated_list'])->name('indicated');
    Route::get('/board',                    [LettersController::class, 'board_list'])->name('board');
    Route::get('/public',                   [LettersController::class, 'public_list'])->name('public');

});
