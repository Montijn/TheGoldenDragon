<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $fillable =[
        'name', 'description', 'price',
    ];

    public function Menu_Items()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function Rice_Choice()
    {
        return $this->hasOne(RiceChoice::class);
    }
}
