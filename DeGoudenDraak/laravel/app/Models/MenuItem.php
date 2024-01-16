<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
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
        return $this->belongsTo(DishType::class, 'dish_type');
    }

    public function specialOffer()
    {
        return $this->belongsToMany(SpecialOffer::class, 'special_offers_has_menu_items', 'menu_items_id', 'special_offers_id');
    }

    public function hasSpecialOffer()
    {
        return $this->specialOffer()->exists();
    }

    public function getDiscountedPrice()
    {

        return $this->price - $this->specialOffer()->first()->price;
    }
}
