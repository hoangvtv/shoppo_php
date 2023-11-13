<?php

namespace App\Http\Controllers\Auth\User;


use App\{
    Http\Requests\UserRequest,
    Http\Controllers\Controller,
    Repositories\Front\UserRepository,
    Http\Requests\AuthRequest,
};


use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{

    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\UserRepository $repository
     *
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;

        $setting = Setting::first();
        if($setting->recaptcha == 1){
            Config::set('captcha.sitekey', $setting->google_recaptcha_site_key);
            Config::set('captcha.secret', $setting->google_recaptcha_secret_key);
        }
    }


    public function showForm()
    {
      return view('user.auth.register');
    }


    public function register(UserRequest $request)
    {   
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
        $this->repository->register($request);
        Session::flash('success',__('Account Register Successfully please login'));
        return redirect()->back();
        
    }
    
    // public function verify($token)
    // {
    //     $verifyUser = User::where('email_token', $token)->first();
    //     if(!is_null($verifyUser)){
    //         $user = $verifyUser->user;

    //         if(!$user->email_verified){
    //             $verifyUser->user->email_verified = 1;
    //             $verifyUser->user->save();

    //             return redirect()->route('user.login')->with('info','Your email is verified successfully. You can now Login')->with('verifiedEmail', $user->email);
    //         }else{
    //             return redirect()->route('user.login')->with('info','Your email is already verified successfully. You can now Login')->with('verifiedEmail', $user->email);
    //         }
    //     }
    // }


    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
       
        if($user){
            
            Auth::login($user);
            
            return redirect(route('user.dashboard'));
        }else{
            return redirect(route('user.login'));
        }
    }



}
