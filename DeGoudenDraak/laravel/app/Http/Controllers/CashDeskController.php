<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class CashDeskController extends Controller
{
    public function index()
    {
        $types = DishType::all()->sortBy('id');
        $items = MenuItem::with('dish_type')->get();
        return view("cashdesk.cashdesk", ["items"=>$items, "types"=>$types]);
    }
}
