<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['seats'];

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
