<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function Menu_Items()
    {
        return $this->hasMany(Menu_Item::class);
    }
}
