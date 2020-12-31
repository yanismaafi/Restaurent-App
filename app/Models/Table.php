<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Table extends Model
{
    
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
