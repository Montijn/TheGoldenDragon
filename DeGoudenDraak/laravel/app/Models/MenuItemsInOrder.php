<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItemsInOrder extends Model
{

    use HasFactory;

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function menuItem()
    {
        return $this->belongsToMany(MenuItem::class);
    }
}
