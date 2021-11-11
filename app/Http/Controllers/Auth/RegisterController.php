<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Sentinel;
use DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function signup_user()
    {
        return view('frontend.layouts.register');
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "email" => "required|unique:users",
                "password" => "required"
            ]);
    
            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
    
            $user = Sentinel::registerAndActivate([
                'email' => $request->email,
                'password' => $request->password,
                'name' => $request->name,
                'role_name' => 'admin',
            ]);
            
            return redirect()->route('login.index')->with("success", "Registration success, please login to continue");

        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

    }
    public function register_user(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|min:6",
                "email" => "required|string|email|unique:users|min:6|max:255",
                "password" => "required|min:6"
            ]);
            
            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
    
            $user = Sentinel::registerAndActivate([
                'email' => $request->email,
                'password' => $request->password,
                'name' => $request->name,
                'role_name' => 'user',
            ]);
            
            Sentinel::findRoleBySlug("user")->users()->attach( $user );
            
            return redirect()->route('login_user')->with("success", "Registration successfully  please login to continue.");

        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

    }
}
