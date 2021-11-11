<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request; 
use App\Models\User; 
use Mail; 
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use DB; 
use Carbon\Carbon; 

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------phph
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


     /**
       * Write code on Method
       *
       * @return response()
       */
      public function Forgetview()
      {
         return view('auth.forget');
      }


      public function getPassword($token) { 

        return view('customauth.passwords.reset', ['token' => $token]);
     }
  
      public function ForgetPassword(Request $request)
      {

          $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return response($validator->errors());
        }        
        $user = User::where('email', $request->email)->first();        

        if (!$user)
        return back()->with('error', 'We cant find a user with that e-mail address.');

        $token =  Str::random(60);

        $user->update(['token' => $token,'updated_at' => Carbon::now(),'created_at' => Carbon::now()]);

        // DB::table('resets_passwords')->insert(
        //     ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        // );
            
        Mail::send('mail.forgot', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with("success", "Please check your email for reset password link");
      }
}
