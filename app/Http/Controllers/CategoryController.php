<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index', [
            'category' => $category,
            'recipes' => $category->recipes()->latest()->with('category')->paginate(20)
        ]);
    }
}
