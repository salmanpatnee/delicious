<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{

    protected static function boot()
    {
        parent::boot();

        Category::deleting(function ($category) {
            $category->recipes->each->update([
                'category_id' => 1
            ]);
        });
    }

    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::orderBy('name')->paginate(20)
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $attributes = $this->validateAttributes();

        Category::create($attributes);

        return redirect(route('admin.categories'))->with('success', 'Category has been added.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $attributes = $this->validateAttributes($category);

        $category->update($attributes);

        return back()->with('success', 'Category updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category deleted');
    }

    protected function validateAttributes(Category $category = null)
    {
        return request()->validate([
            'name'  => 'required|min:3|max:255',
            'slug'  => ['required', Rule::unique('categories', 'slug')->ignore($category)],
        ]);
    }
}
