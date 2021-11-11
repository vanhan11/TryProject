<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Illuminate\Support\Facades\Validator;
use DB; 
use Carbon\Carbon; 
use Illuminate\Support\Str;
use App\Models\User; 
use Mail; 
use Hash;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function ResetPasswordForm($token) { 
        return view('auth.resetpassword', ['token' => $token]);
     }
    
     public function UpdatePassword(Request $request)
     {
         $request->validate([
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);
         
         $user = User::where('token', $request->token)->first();

         if(!$user){
             return redirect()->route('login_user')->withInput()->with("error", "Invalid token!");
         }
 
         $user->update(['password' => Hash::make($request->password), 'token' => null]);
 
         return redirect()->route('login_user')->with('success', 'Your password has been changed!');
     }
}
