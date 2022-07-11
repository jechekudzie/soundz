<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if($user){
            if ($user->provider != 'local') {
                return redirect('/')->with('message', 'You registered using ' . $user->provider . ',
            please login with ' . $user->provider . ' option below.');

            }
        }
         else {
            $request->authenticate();
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->provider == 'local') {
                if ($user->hasVerifiedEmail()) {
                    return redirect()->intended(RouteServiceProvider::HOME);
                } else {
                    $user->sendEmailVerificationNotification();
                    return redirect('verify-email');
                }
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }


    }

    /**
     * Destroy an authenticated session.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
