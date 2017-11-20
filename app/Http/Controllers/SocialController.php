<?php

namespace App\Http\Controllers;
use Auth;
use Socialite;
use App\User;
use Styde\Html\Facades\Alert;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getSocialAuth($provider = null)
    {
        if (!config("services.$provider")) abort('404');

        return Socialite::driver($provider)->redirect();
    }


    public function getSocialAuthCallback($provider = null)
    {
        if ($user = Socialite::driver($provider)->user()) {
            //dd($user);

            If( $the_user = User::where('email',$user->email )->first() ){
                //dd($the_user);
                $the_user->name = $user->name;
                $the_user->social_network = $provider;
                $the_user->alias = $user->nickname = null ? null : $user->nickname;
                $the_user->avatar = $user->avatar;
                $the_user->social_id = $user->id;
                $the_user->save();
                Auth::login($the_user);
            }else{
                Alert::danger("La cuenta $user->email NO tiene permiso para entrar a la plataforma");
            }

            return redirect()->route('dashboard');


        } else {
            return '¡¡¡Algo fue mal!!!';
        }
    }
}

