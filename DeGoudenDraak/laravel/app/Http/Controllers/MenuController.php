<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $menuItems = MenuItem::orderBy("dish_type", "ASC")->get();
        $favorites = unserialize($request->cookie('favorites', 'a:0:{}'));

        return view('menu/index', compact('menuItems', 'favorites'));
    }

    public function download()
    {
        $dishes = MenuItem::all();

        $html = view('pdf/index', compact('dishes'))->render();

        return PDF::loadHTML($html)->download('GoudenDraak_Menu.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create(){
        $dishtypes = DishType::all();
        return view('menu/create', compact('dishtypes'));
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
        return redirect()->route('menu.index');
    }
    public function addFavorite($menuItemId, Request $request)
    {
        $menuItem = MenuItem::find($menuItemId);
        $favorites = unserialize($request->cookie('favorites', 'a:0:{}'));
        $favorites[] = $menuItem->id;
        $serializedFavorites = serialize($favorites);

        return redirect()->route('menu.index')->withCookie(Cookie::forever('favorites', $serializedFavorites));
    }

    public function getFavorites(Request $request)
    {

        $serializedFavorites = $request->cookie('favorites', 'a:0:{}');
        $favorites = unserialize($serializedFavorites);
        $favoriteMenuItems = MenuItem::whereIn('id', $favorites)->get();

        return view('favorites', compact('favoriteMenuItems'));
    }

    public function removeFavorite($menuItemId, Request $request)
    {
        $menuItem = MenuItem::find($menuItemId);
        $favorites = unserialize($request->cookie('favorites', 'a:0:{}'));
        $key = array_search($menuItem->id, $favorites);

        if ($key !== false) {
            unset($favorites[$key]);
        }

        $serializedFavorites = serialize($favorites);

        return redirect('/menu')->withCookie(cookie()->forever('favorites', $serializedFavorites));
    }

    public function edit($menuItemId)
    {
        $menuItem = MenuItem::find($menuItemId);
        $dishtypes = DishType::all();

        return view('menu/edit', compact('menuItem', 'dishtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $menuItemId
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, $menuItemId)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'menu-code' => 'required',
            'menu-code-addition' => 'required',
            'dishtype' => 'required',
        ]);

        MenuItem::where('id', $menuItemId)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'menu_code' => $request->input('menu-code'),
                'menu_code_addition' => $request->input('menu-code-addition'),
                'dish_type' => $request->input('dishtype'),
            ]);

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $menuItemId
     * @return RedirectResponse|Redirector
     */
    public function destroy($menuItemId)
    {
        MenuItem::destroy($menuItemId);

        return redirect('/menu');
    }


}
