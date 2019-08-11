<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $authUser = $this->findOrCreateUser($user);


//        dd($user);

        Auth::login($authUser);

        return redirect()->route('homepage');
    }

    private function findOrCreateUser($googleUser){
        $authUser = User::where('provider_id', $googleUser->id)->first();

        if($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $googleUser->name,
            'password' => $googleUser->token,
            //'password'=>bcrypt(11111111),
            'email' => $googleUser->email,
            'provider_id' => $googleUser->id,
            'provider' => $googleUser->id,
            'avatar'=>$googleUser->avatar,
        ]);
    }
}
