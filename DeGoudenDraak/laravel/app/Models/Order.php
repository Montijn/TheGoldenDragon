<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'table_id',
    ];

    public function menuItemsInOrder()
    {
        return $this->belongsToMany(MenuItem::class, 'orders_has_menu_items', 'orders_id', 'menu_items_id')
            ->withPivot('amount', 'price', 'comment');
    }
}
