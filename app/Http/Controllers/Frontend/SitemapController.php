<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class SitemapController extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->take(3)->get();
        return response()->view('frontend.sitemap', [
            'blog' => $blog,
        ])->header('Content-Type', 'text/xml');
    }
}
