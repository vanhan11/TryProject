<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Sentinel;
use Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login_user()
    {
        return view('frontend.layouts.login');
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "email" => "required",
                "password" => "required"
            ]);

            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $remember = isset($request->remember) ? true : false;
            $user = Sentinel::authenticate([
                'login'    => $request->email,
                'password' => $request->password,
            ],$remember);

            if ( !$user ) {
                return redirect()->back()->with('error', "Email or Password is invalid!");
            }

            return redirect()->route('home');

        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function login_auth_user(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "email" => "required",
                "password" => "required"
            ]);

            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $remember = isset($request->remember) ? true : false;
            $user = Sentinel::authenticate([
                'login'    => $request->email,
                'password' => $request->password,
            ],$remember);

            if ( !$user ) {
                return redirect()->back()->with('error', "Email or Password is invalid!");
            }

            return redirect()->route('profile_user')->with("success","Login successfully.");

        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function logout()
    {   
        $current_user = Sentinel::getUser();
        Sentinel::logout($current_user, true);
        return redirect()->route('login.index');
    }

    public function logout_user()
    {   
        $current_user = Sentinel::getUser();
        Sentinel::logout($current_user, true);
        return redirect()->route('goreala')->with("success","Logout successfully.");
    }
}
