<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Sentinel;

class DashboardController extends Controller
{
    public function home()
    {
        return view('admin.dashboard.index');
    }
}
