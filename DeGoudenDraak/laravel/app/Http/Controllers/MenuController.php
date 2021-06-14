<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index()
    {

        $menuItems = MenuItem::orderBy("dish_type", "ASC")->get();

        return view('menu', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create(){
        $dishtypes = DishType::all();
        return view('addmenuitem', compact('dishtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request){


       $menuitem = MenuItem::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'menu_code' => $request->input('menu-code'),
            'menu_code_addition' => $request->input('menu-code-addition'),
        ])->id;
        MenuItem::where('id', $menuitem)
            ->update([
                'dish_type' => $request->input("dishtype")
            ]);
        return redirect('/menu');
    }
}
