<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Table;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guests/index', compact('guests'));
    }

    public function create()
    {
        $tables = Table::all();
        return view('guests/create', compact('tables'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'table_id' => 'required',
            'name' => 'required',
            'age' => 'required|integer|min:1',
            'amount' => 'required|integer|min:1|max:8',
        ]);
        $selectedTable = Table::findOrFail($request->input('table_id'));
        if ($request->input('amount') > $selectedTable->seats) {
            return redirect()->back()->with('error', 'Amount cannot be higher than the table seats.');
        }
        Guest::create($request->all());

        return redirect()->route('guests.index')
            ->with('success', 'Guest created successfully.');
    }


    public function edit(Guest $guest)
    {
        $tables = Table::all();
        return view('guests/edit', compact('guest', 'tables'));
    }

    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'table_id' => 'required|exists:tables,id',
            'name' => 'required|string',
            'age' => 'required|integer',
            'amount' => 'required|integer|min:1|max:8',
        ]);
        $selectedTable = Table::findOrFail($request->input('table_id'));
        if ($request->input('amount') > $selectedTable->seats) {
            return redirect()->back()->with('error', 'Amount cannot be higher than the table seats.');
        }
        $guest->update($request->all());

        return redirect()->route('guests.index')
            ->with('success', 'Guest updated successfully.');
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();

        return redirect()->route('guests.index')
            ->with('success', 'Guest deleted successfully.');
    }
}
