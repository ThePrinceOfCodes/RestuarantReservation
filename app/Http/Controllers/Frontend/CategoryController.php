<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('frontend.categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        // $menus = $category->menu();
        return view('frontend.categories.show', compact('category'));
    }
}
