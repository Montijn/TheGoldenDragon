<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use App\Models\Order;
use Illuminate\Support\Facades\Cookie;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class CashDeskController extends Controller
{
    public function index()
    {
        return view("cashdesk.cashdesk");
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $searchResult = MenuItem::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('menu_code', 'LIKE', "%{$search}%")
            ->get();

        // Store search term and results in the session
        $request->session()->put('searchTerm', $search);
        $request->session()->put('searchResult', $searchResult);

        return redirect()->route('cashdesk.order.create');
    }

    public function orderCreate(Request $request)
    {
        $sortBy = $request->input('sortBy', 'dish_type');
        $dishesQuery = MenuItem::orderBy($sortBy, 'ASC');
        $dishes = $dishesQuery->get();
        $order = unserialize($request->cookie('order', 'a:0:{}'));
        $total = 0;

        $searchTerm = $request->session()->get('searchTerm', '');
        $searchResult = $request->session()->get('searchResult', collect([]));

        if ($order != null) {
            foreach ($order as $orderItem) {
                $total += $orderItem['price'] * $orderItem['amount'];
            }
        }
        $dishes = $dishes->diff($searchResult);
        $request->session()->forget(['searchTerm', 'searchResult']);

        return view('cashdesk.order.create', compact('dishes', 'order', 'total', 'searchTerm', 'searchResult', 'sortBy'));
    }

    public function addToOrder(Request $request, $dishId)
    {
        $order = unserialize($request->cookie('order', 'a:0:{}'));
        $menuItem = MenuItem::findOrFail($dishId);
        $existingDish = collect($order)->where('id', $dishId)->first();

        if ($existingDish) {
            $existingDish['amount'] = $request->input("quantities.$dishId", 1);
        } else {
            $order[] = [
                'id' => $menuItem->id,
                'name' => $menuItem->name,
                'price' => $menuItem->price,
                'amount' => $request->input("quantities.$dishId", 1),
                'comment' => $request->input("comment.$dishId", " "),
                'menu_code' =>$menuItem->menu_code,
                'menu_code_addition' =>$menuItem->menu_code_addition
            ];
        }

        $order = serialize($order);
        return redirect('/cashdesk/order/create')->withCookie(Cookie::forever('order', $order));
    }

    public function orderStore(Request $request)
    {
        $newOrder = Order::create();
        $newOrder -> save();
        $order = unserialize($request->cookie('order', 'a:0:{}'));
        foreach ($order as $orderItem) {
            $menuItem = MenuItem::find($orderItem['id']);
            $newOrder->menuItemsInOrder()->attach($menuItem->id, [
                'amount' => $orderItem['amount'],
                'price' => $orderItem['price'],
                'comment' => $orderItem['comment']
            ]);
        }
        $newOrder->save();
        return redirect('/cashdesk')->withCookie(Cookie::forget('order'));
    }

}
