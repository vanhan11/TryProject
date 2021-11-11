<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Sentinel;

class ChangePassword extends Controller
{
    public function view()
    {
        return view('frontend.layouts.changepwd');
    }

    public function store(Request $request)
    {
 
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required',
            'new_confirm_password' => 'same:new_password',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
 
       $hashedPassword = Sentinel::getUser()->password;
 
       if (\Hash::check($request->current_password , $hashedPassword )) {
 
         if (!\Hash::check($request->new_confirm_password , $hashedPassword)) {
 
            User::find(Sentinel::getUser()->id)->update(['password'=> Hash::make($request->new_password)]);
 
              return redirect()->route('profile_user')->with("success", "password has been changed successfully.");
            }
 
            else{
                  session()->flash("error","new password can not be the old password");
                  return redirect()->back();
                }
 
           }
 
          else{
               session()->flash("error","old password doesnt matched ");
               return redirect()->back();
             }
 
       }
}
