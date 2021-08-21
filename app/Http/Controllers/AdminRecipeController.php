<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminRecipeController extends Controller
{
    public function index()
    {
        return view('admin.recipes.index', [
            'recipes' => Recipe::latest()->paginate(20)
        ]);
    }

    public function create()
    {
        return view('admin.recipes.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title'         => 'required|min:3|max:255',
            'body'          => 'required',
            'slug'          => ['required', Rule::unique('recipes', 'slug')],
            'prep_time'     => 'required|numeric|min:5|max:120',
            'cook_time'     => 'required|numeric|min:5|max:120',
            'thumbnail'     => 'image',
            'serves'        => 'required|numeric|min:1|max:5',
            'category_id'   => 'required|exists:categories,id',
        ]);

        if (request()->has('thumbnail')) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        auth()->user()->recipes()->create($attributes);

        return redirect(route('recipes.index'));
    }
}
