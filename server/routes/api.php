<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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
// Routing send tokens API "mobile applications"
Route::post('/sanctum/token', function (Request $request) {
    $request->validate(['email' => 'required|email', 'password' => 'required', 'device_name' => 'required',]);
    $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages(['email' => ['The provided credentials are incorrect.'],]);
        }
        return $user->createToken($request->device_name)->plainTextToken;
});
// Default opened routing send tokens API "desktop web version" for all users
Route::get('/',                     'Api\FrontController@index')->name('expenses.indexPage');
Route::get('events/show',           'Api\FrontController@eventsShowAll')->name('expenses');
Route::get('event/show/{id}',       'Api\FrontController@eventShowItem')->name('expenses.itemEvent');
Route::post('events/selection',     'Api\FrontController@eventsSelect')->name('expenses.selectEvent');

Route::post('/register',        'Api\AuthController@register');
Route::post('/login',           'Api\AuthController@login');
// Authorize user auth:api
Route::middleware('auth:api')->group(function () {
    Route::get('user/comments',     'Api\FrontUsersController@frontUsersCommentsList')->name('users.listComments');
    Route::get('user/rate',         'Api\FrontUsersController@frontUserRate')->name('users.rateLevel');
    Route::post('user/add-comment', 'Api\FrontUsersController@frontUsersAddComment')->name('users.addComment');
});
// Authorize user auth:sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// CRUD roles routing send tokens API "desktop web version" / "authorized partners-users"
Route::middleware('auth:sanctum', 'verified')->group(function () {
    Route::get('partner/events',            'Api\FrontPartnersController@frontEventsList')->name('partners.listEvents');
    Route::post('partner/event/store',      'Api\FrontPartnersController@frontEventStore')->name('partners.storeEvent');
    Route::get('partner/event/show',        'Api\FrontPartnersController@frontEventShow')->name('partners.showEvent');
    Route::put('partner/event/update',      'Api\FrontPartnersController@frontEventUpdate')->name('partners.updateEvent');
    Route::delete('partner/event/destroy',  'Api\FrontPartnersController@frontEventDestroy')->name('partners.destroyEvent');
});
