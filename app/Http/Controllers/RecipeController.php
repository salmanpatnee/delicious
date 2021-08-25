<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return view('recipes.index', [
            'bestRecipes' => Recipe::latest()->take(6)->withoutGlobalScope('commentsCount')->with('category')->get(),
            'recipes'     => Recipe::latest()->skip(6)->take(9)->get()
        ]);
    }

    public function recipes()
    {
        return view('recipes.all', [
            'recipes'   => Recipe::latest()->with('category')->paginate(20)
        ]);
    }

    public function show(Recipe $recipe)
    {


        return view('recipes.show', [
            'recipe'    => $recipe,
            'comments'  => $recipe->comments()->latest()->paginate(20),
        ]);
    }
}
