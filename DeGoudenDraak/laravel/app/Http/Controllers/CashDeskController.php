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

    public function orderCreate(Request $request)
    {
        $dishes = MenuItem::orderBy("dish_type", "ASC")->get();
        $order = unserialize($request->cookie('order', 'a:0:{}'));
        $total = 0;

        $searchTerm = $request->input('search', '');
        $searchResult = collect([]);
        if ($searchTerm) {
            $searchResult = $dishes->where('name', 'like', '%' . $searchTerm . '%');
        }
        if ($order != null) {
            foreach ($order as $orderItem) {
                $total += $orderItem['price'] * $orderItem['amount'];
            }
        }

        return view('cashdesk.order.create', compact('dishes', 'order', 'total', 'searchTerm', 'searchResult'));
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
                'price' => $orderItem['price']
            ]);
        }
        $newOrder->save();
        return redirect('/cashdesk')->withCookie(Cookie::forget('order'));
    }

}
