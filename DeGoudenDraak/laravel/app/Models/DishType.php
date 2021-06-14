<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{

    protected $fillable = [
        'name',
    ];

    public function Menu_Items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
