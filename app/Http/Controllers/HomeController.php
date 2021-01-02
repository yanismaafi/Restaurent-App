<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dishes = Dish::orderBy('price','ASC')->get();
        $dishes_categories = Category::all();

        return view('restaurent.home',compact('dishes','dishes_categories'));
    }
}
