<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name','price','ingredient','image','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
