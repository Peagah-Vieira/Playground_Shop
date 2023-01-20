<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    protected function _registerOrLogin($data){
        $user = User::where('email',$data->email)->first();
        
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->password = Hash::make('password');
            $user->save();
        }

        Auth::login($user);
    }
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback(){
        $githubUser = Socialite::driver('github')->user();

        $this->_registerOrLogin($githubUser);
        return redirect()->route('dashboard');
    }

    public function redirectToGitlab(){
        return Socialite::driver('gitlab')->redirect();
    }

    public function handleGitlabCallback(){
        $gitlabUser = Socialite::driver('gitlab')->user();

        $this->_registerOrLogin($gitlabUser);
        return redirect()->route('dashboard');
    }
}
