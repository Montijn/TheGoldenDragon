<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'expires_at',
    ];

    protected $dates = [
        'expires_at',
    ];


    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class, 'special_offers_has_menu_items', 'special_offers_id', 'menu_items_id');
    }

/*    public function riceChoice()
    {
        return $this->hasOne(RiceChoice::class);
    }*/
}
