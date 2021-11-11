<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class FeedController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('admin.feedback.index',compact('data'));
    }
}
