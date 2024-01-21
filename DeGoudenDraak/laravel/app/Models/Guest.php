<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['table_id', 'name', 'age', 'amount'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

}
