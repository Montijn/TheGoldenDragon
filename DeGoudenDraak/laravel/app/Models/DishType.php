<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{

    protected $fillable = [
        'name',
    ];

    public function MenuItems()
    {
        return $this->belongsTo(MenuItem::class, 'dish_type');
    }
}
