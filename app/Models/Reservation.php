<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name','email','phone','date','time','nbrPerson','comment','table_id'];
    

    public function table()
    {
        return $this->hasOne('App\Models\Table');
    }
}
