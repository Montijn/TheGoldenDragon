<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    public function index()
    {
        $specialOffers = SpecialOffer::with('menuItems')->where('expires_at', '>=', now())->get();
        return view('specialoffers.index', compact('specialOffers'));
    }

    public function create()
    {
        $menuItems = MenuItem::all();
        return view('specialoffers.create', compact('menuItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'expires_at' => 'required|date|after:today',
            'menu_items' => 'required|array',
        ]);

        $specialOffer = SpecialOffer::create($request->only(['name', 'description', 'price', 'expires_at']));


        $specialOffer->menuItems()->attach($request->input('menu_items'));

        return redirect()->route('specialoffers.index')->with('success', 'Special offer created successfully.');
    }
}
