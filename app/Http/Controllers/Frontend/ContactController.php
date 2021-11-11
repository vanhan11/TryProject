<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Redirect;
use URL;
use Validator;

class ContactController extends Controller
{
    public function store(Request $request){
            $validate = Validator::make($request->all(), [
                'g-recaptcha-response' => 'required|captcha',
                'name' => 'required|string|min:6|max:255',
                'email' => 'required|string|email|min:6|max:255',
                'message' => 'required|string',

            ]);


            if($validate->fails()) {
                $url = URL::route('goreala') . '#contacts';
                return Redirect::to($url)->withErrors($validate);
            }

            $Contact = new Contact;
            $Contact->name = $request->name;
            $Contact->email = $request->email;
            $Contact->message = $request->message;
            $Contact->save();

            
            return redirect()->back()->with("success","Thank you, we will contact you.");



	}
}
