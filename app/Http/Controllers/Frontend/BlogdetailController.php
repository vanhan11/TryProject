<?php

namespace App\Http\Controllers\Frontend;

use Sentinel;
use Validator;
use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class BlogdetailController extends Controller
{
    public function blogdetail($slug)
    {   //Slug
        $data = Blog::where('slug',$slug)->first();
        $user = User::with('comment')->get();
        $count =  Comment::where('blog_id', '=', $data->id)->count();
        $comment = Comment::with('user')->where('blog_id', '=', $data->id)->latest('created_at')->get();
        return view('frontend.layouts.blog_detail',compact('data','user','comment','count'));
    }

    public function store(Request $request)
    {
        $valid = [
            'comment' => 'required',
        ];

        $validator = Validator::make($request->all(),$valid);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $Comment = new Comment;
        $Comment->user_id = Sentinel::getUser()->id;
        $Comment->blog_id = $request->blog_id;
        $Comment->commentar = $request->comment;
        $Comment->save();

        return redirect()->back();
    }

}
