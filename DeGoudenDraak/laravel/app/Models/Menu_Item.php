<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Item extends Model
{
    protected $fillable = [
        'menu_code', 'menu_code_addition', 'name', 'price', 'description',
    ];

    public function Orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function Dish_Type()
    {
        return $this->hasOne(Dish_Type::class);
    }

    public function Special_Offers()
    {
        return $this->belongsToMany(Special_Offer::class);
    }
}
