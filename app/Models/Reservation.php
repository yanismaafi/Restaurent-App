<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table;

class Reservation extends Model
{
    protected $fillable = ['name','email','phone','date','time','nbrPerson','comment'];
    

    public function table()
    {
        return $this->hasOne(Table::class);
    }
}
