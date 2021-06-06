<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class CashDeskController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::with('dish_type')->get();
        return view('cashdesk.cashDesk')->with('menuItems', $menuItems);
    }
}
