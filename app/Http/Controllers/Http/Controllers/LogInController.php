<?php

namespace App\Http\Controllers\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class LogInController extends Controller
{
    //
    public function redirectToProvider($provider)
    {
        //redirect to provider
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        //check data from facebook, google and apple
        $socialiteUser = Socialite::driver($provider)->user();

        //save user into local database, first check if user already exist
        $user = User::firstOrCreate(
            [
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
            ],
            [
                'email' => $socialiteUser->getEmail(),
                'name' => $socialiteUser->getName(),
            ]
        );
        /*automatically log in user when all conditions are met, else handle it on
         1. Facebook, Google and Apple*/
        auth()->login($user, true);

        //write logic to check user role - admin, customer or artist

        //return to user dashboard based on their role
        return redirect('dashboard');
    }
}
