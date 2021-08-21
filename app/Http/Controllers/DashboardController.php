<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'recipesCount' => Recipe::count(),
            'categoriesCount' => Category::count(),
            'usersCount' => User::count(),
        ]);
    }
}
