<?php

namespace App\Http\Livewire;

use App\Models\DishType;
use App\Models\MenuItem;
use Livewire\Component;

class CashDesk extends Component
{
    public $dishTypeId = 1;
    public $order = array();
    public $priceTotal;

    public function render()
    {
        $items = MenuItem::where('dish_type', $this->dishTypeId)->orderBy('menu_code', 'ASC')->orderBy('menu_code_addition', 'ASC')->get();
        $types = DishType::all()->sortBy('id');
        return view('livewire.cash-desk')->with('items', $items)->with('types', $types);
    }

    public function selectType($id)
    {
        $this->dishTypeId = $id;
    }

    public function addToOrder($item)
    {
        array_push($this->order, $item);
    }
}
