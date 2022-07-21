<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/check', 'AdminController@index');
Route::get('/logs', 'LoginController@logs');

Route::get('/admin', 'Admin\EventsController@index');
Route::resource('/admin/event_types', 'Admin\EventTypesController');
Route::resource('/admin/events', 'Admin\EventsController');

Route::get('/admin/{event}/episodes', 'Admin\EpisodesController@index');
Route::post('/admin/{event}/episodes', 'Admin\EpisodesController@store');

Route::resource('/admin/streaming_platforms', 'Admin\StreamingPlatformController');
Route::resource('/admin/ticket_types', 'Admin\TicketTypesController');
Route::resource('/admin/items', 'Admin\ItemsController');
Route::resource('/admin/packages', 'Admin\PackagesController');


Route::resource('/admin/artists', 'Admin\ArtistsController');

//Payments
Route::get('/select_plan', 'PaymentsController@select_plan');
Route::get('/checkout/{package}', 'PaymentsController@checkout');


Route::post('/flutterwave/create/{package}', 'PaymentsController@create');
Route::post('/flutterwave/store', 'PaymentsController@store');


Route::get('/login/{provider}', 'LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'LoginController@handleProviderCallback');


Route::get('/dashboard', 'SiteController@index');
Route::get('/update_role', 'SiteController@update_role');
Route::get('/profile', 'SiteController@profile');

require __DIR__ . '/auth.php';
