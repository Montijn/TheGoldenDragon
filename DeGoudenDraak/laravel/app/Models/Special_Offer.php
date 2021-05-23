<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special_Offer extends Model
{
    protected $fillable =[
        'name', 'description', 'price',
    ];

    public function Menu_Items()
    {
        return $this->hasMany(Menu_Item::class);
    }

    public function Rice_Choice()
    {
        return $this->hasOne(Rice_Choice::class);
    }
}
