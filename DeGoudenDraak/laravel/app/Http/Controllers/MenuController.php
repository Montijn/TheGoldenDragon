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

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $menuItems = MenuItem::orderBy("dish_type", "ASC")->get();
        $favorites = unserialize($request->cookie('favorites', 'a:0:{}'));

        return view('menu', compact('menuItems', 'favorites'));
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
    public function addFavorite($menuItemId, Request $request)
    {
        $menuItem = MenuItem::find($menuItemId);
        $favorites = unserialize($request->cookie('favorites', 'a:0:{}'));
        $favorites[] = $menuItem->id;
        $serializedFavorites = serialize($favorites);

        return redirect('/menu')->withCookie(Cookie::forever('favorites', $serializedFavorites));
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

}
