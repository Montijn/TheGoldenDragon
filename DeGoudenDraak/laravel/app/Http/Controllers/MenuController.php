<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function show(): View
    {
        $dishes = MenuItem::all();
        return view('website.menu', compact('dishes'));
    }
}
