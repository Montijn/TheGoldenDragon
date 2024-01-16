<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiceChoice extends Model
{
    protected $fillable = [
        'name', 'extra_price'
    ];

 /*   public function Special_Offers()
    {
        return $this->belongsTo(SpecialOffer::class, 'rice_choice_id');
    }*/
}
