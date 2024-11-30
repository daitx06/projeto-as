<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['number', 'price', 'capacity'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

