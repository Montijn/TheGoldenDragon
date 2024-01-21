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
        return view('specialoffers/index', compact('specialOffers'));
    }

    public function create()
    {
        $menuItems = MenuItem::all();
        return view('specialoffers/create', compact('menuItems'));
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


    public function edit($id)
    {
        $specialOffer = SpecialOffer::with('menuItems')->findOrFail($id);
        $menuItems = MenuItem::all();

        return view('specialoffers/edit', compact('specialOffer', 'menuItems'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'expires_at' => 'required|date|after:today',
            'menu_items' => 'required|array',
        ]);

        $specialOffer = SpecialOffer::findOrFail($id);
        $specialOffer->update($request->only(['name', 'description', 'price', 'expires_at']));

        $specialOffer->menuItems()->sync($request->input('menu_items'));

        return redirect()->route('specialoffers.index')->with('success', 'Special offer updated successfully.');
    }

    public function destroy($id)
    {
        $specialOffer = SpecialOffer::findOrFail($id);
        $specialOffer->menuItems()->detach();
        $specialOffer->delete();

        return redirect()->route('specialoffers.index')->with('success', 'Special offer deleted successfully.');
    }
}
