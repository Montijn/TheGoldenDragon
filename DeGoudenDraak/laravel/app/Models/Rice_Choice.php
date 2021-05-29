<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rice_Choice extends Model
{
    protected $fillable = [
        'name', 'extra_price'
    ];

    public function Special_Offers()
    {
        return $this->belongsTo(Special_Offer::class, 'rice_choice_id');
    }
}
