<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SocialLoginController extends Controller
{

//redirect
public function redirect($provider){
    return Socialite::driver($provider)->redirect();
   }

   //callback
   public function callback($provider){
    $socialUser = Socialite::driver($provider)->user();


    $user = User::updateOrCreate([
        'provider_id' => $socialUser->id,
    ], [
        'name' => $socialUser->name,
        'nickname' => $socialUser->nickname,
        'email' => $socialUser->email,
        'provider_token' => $socialUser->token,
        'provider' => $provider,
        'role' => 'user'
    ]);

    Auth::login($user);

    return to_route('userHome');


   }




}
