<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login/{provider}', 'LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'LoginController@handleProviderCallback');


Route::get('/dashboard', function () {
    $user = Auth::user();
    if ($user->provider == 'local') {
        if ($user->hasVerifiedEmail()) {
            return view('dashboard');
        } else {
            $user->sendEmailVerificationNotification();
            return redirect('verify-email');
        }
    } else {
        return view('dashboard');
    }


})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
