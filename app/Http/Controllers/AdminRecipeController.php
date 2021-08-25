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
        $attributes = $this->validateAttributes();

        $attributes = $this->uploadRecipeMedia($attributes);

        auth()->user()->recipes()->create($attributes);

        return redirect(route('admin.recipes'))->with('success', 'Recipe has been published.');
    }

    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', compact('recipe'));
    }

    public function update(Recipe $recipe)
    {
        $attributes = $this->validateAttributes($recipe);

        $attributes = $this->uploadRecipeMedia($attributes);

        $recipe->update($attributes);

        return back()->with('success', 'Recipe updated');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return back()->with('success', 'Recipe deleted');
    }

    protected function validateAttributes(Recipe $recipe = null)
    {
        return request()->validate([
            'title'         => 'required|min:3|max:255',
            'body'          => 'required',
            'ingredients'   => 'required',
            'slug'          => ['required', Rule::unique('recipes', 'slug')->ignore($recipe)],
            'prep_time'     => 'required|numeric|min:5|max:120',
            'cook_time'     => 'required|numeric|min:5|max:120',
            'thumbnail'     => 'image',
            'banner'        => 'image',
            'serves'        => 'required|numeric|min:1|max:5',
            'category_id'   => 'required|exists:categories,id',
        ]);
    }

    private function getRecipeMediaToUpload()
    {
        return ['thumbnail', 'banner'];
    }

    private function uploadRecipeMedia($attributes)
    {
        foreach ($this->getRecipeMediaToUpload() as $image) {
            if (request()->has($image)) {
                $attributes[$image] = request()->file($image)->store('thumbnails');
            }
        }

        return $attributes;
    }
}
