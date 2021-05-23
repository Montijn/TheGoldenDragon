<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish_Type extends Model
{

    protected $fillable = [
        'name',
    ];

    public function Menu_Items()
    {
        return $this->belongsTo(Menu_Item::class, 'dish_type');
    }
}
