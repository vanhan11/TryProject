<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upcoming;
use App\Models\ProtectedC;
use App\Models\Program;
use App\Models\Tours;
use App\Models\Blog;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {   //upcoming
        // $upcoming = Upcoming::latest()->take(4)->get();
        // //protected dengan slice data menjadi 2
        // $protected = ProtectedC::all()->toArray();
        // $output = array_slice($protected, 0,2);
        // $protected1 = ProtectedC::all()->toArray();
        // $output1 = array_slice($protected1, 2);
        // //program
        // $program = Program::latest()->take(3)->get();
        // //tours
        // $tour = Tours::latest()->take(4)->get();
        // //blog
        // $blogray = Blog::latest()->take(3)->get();
        // $testimoni = Testimoni::latest()->take(3)->get();

        return view('frontend.home.index2');
    }
}