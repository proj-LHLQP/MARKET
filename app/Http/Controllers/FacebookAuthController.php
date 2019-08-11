<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Socialite;

class FacebookAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

   //     dd($user->avatar);
        $authUser = $this->findOrCreateUser($user);


//        dd($user);

        Auth::login($authUser);

        return redirect()->route('homepage');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = User::where('provider_id', $facebookUser->id)->first();

        if($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'password' => $facebookUser->token,
            //'password'=>bcrypt(11111111),
            'email' => $facebookUser->email,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
            'avatar'=>$facebookUser->avatar,
        ]);
    }
}
