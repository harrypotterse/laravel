<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class socialmedia extends Controller
{
     public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/home');
        dd(1);
        /*
         * $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
         */

        //$selectProvider = Provider::where('provider_id', $user->getId())->first();

        // if (!$selectProvider) {
        //     //new user

        //     $userGetReal = User::where('email', $user->getEmail())->first();

        //     if (!$userGetReal) {
        //         $userGetReal = new User();
        //         $userGetReal->name = $user->getName();
        //         $userGetReal->email = $user->getEmail();
        //         $userGetReal->save();
        //     }

        //     $newprovider = new Provider();
        //     $newprovider->provider_id = $user->getId();
        //     $newprovider->provider = $provider;
        //     $newprovider->user_id = $userGetReal->id;
        //     $newprovider->save();

        // } else {
        //     //login user
        //     $userGetReal = User::find($selectProvider->user_id);
        // }

       // auth()->login($userGetReal);
        return Redirect('/');
    }

}
