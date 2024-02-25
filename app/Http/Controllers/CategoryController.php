<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function show($category)
    // {
    //     return view('categories.show', compact('category'));
    // }
    
    public function show(Category $category)
{
    $products = $category->products;
    return view('categories.show', compact('category', 'products'));
}
}
