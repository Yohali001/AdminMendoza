<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');
    }

    public function home()
    {
        $categories = Category::all();
        return view ('admin.categories.home', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        //dd(\App\Models\Category::all())
        //Category::create{[
            //'name' => $request ->category
       // ]};
        $newCategory = new Category();
        $newCategory->name =$request->name;
        $newCategory-> save();

        return redirect()->back();  
    }
} 
