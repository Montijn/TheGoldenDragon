<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{

    public function show(): View{
        return view('admin.dashboard');
    }
}
