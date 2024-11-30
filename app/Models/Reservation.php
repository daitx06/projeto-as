<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['guests', 'total_cost'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}


