<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    function callGithub(){
        $callGithubLoginService=Socialite::driver('github')->redirect();
        return $callGithubLoginService;
    }

    function gitHubCallBack(){
        $user = Socialite::driver('github')->stateless()->user();

        $token = $user->token;

        $userId   = $user->getId();
        $nickName = $user->getNickname();
        $name     = $user->getName();
        $email    = $user->getEmail();
        $img      = $user->getAvatar();

        Session::put('token',$token);
        Session::put('userId',$userId);
        Session::put('nickName',$nickName);
        Session::put('name',$name);
        Session::put('email',$email);
        Session::put('img',$img);

        $countValue = DB::table('users')->where('email','=',$email)->count();

        if($countValue == 0){
            DB::table('users')->insert([

                'name'=>$name,
                'email'=>$email,
                'user_id'=>$userId,
                'nickname'=>$nickName

            ]);
            return redirect('/dashboardPage');
        }else{
            return redirect('/dashboardPage');
        }
    }

    function Logout(Request $request){
        $request->Session()->flush();
        return redirect('/');
    }




  /* function githubRedirect(Request $request){
       return Socialite::driver('github')->redirect();
   }

    function githubCallback(Request $request){
        $user = Socialite::driver('github')->stateless()->user();
        dd($user);
    }*/
}
