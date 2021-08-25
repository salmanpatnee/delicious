<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminRecipeController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes', [RecipeController::class, 'recipes'])->name('recipes');

Route::get('/recipes/{recipe:slug}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/categories/{category:slug}', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/search', SearchController::class);

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('login.destroy');
    Route::post('/recipes/{recipe}/comments', [CommentController::class, 'store'])->name('comments.store');
});


Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admin/recipes/', [AdminRecipeController::class, 'index'])->name('admin.recipes');
    Route::get('/admin/recipes/create', [AdminRecipeController::class, 'create'])->name('admin.recipes.create');
    Route::post('/admin/recipes', [AdminRecipeController::class, 'store'])->name('admin.recipes.store');
    Route::get('/admin/recipes/edit/{recipe}', [AdminRecipeController::class, 'edit'])->name('admin.recipes.edit');
    Route::patch('/admin/recipes/{recipe}', [AdminRecipeController::class, 'update'])->name('admin.recipes.update');
    Route::delete('/admin/recipes/{recipe}', [AdminRecipeController::class, 'destroy'])->name('admin.recipes.destroy');

    Route::get('/admin/categories/', [AdminCategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/categories/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/admin/categories', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/admin/categories/edit/{category}', [AdminCategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::patch('/admin/categories/{category}', [AdminCategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{category}', [AdminCategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('/admin/users/', [AdminUserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/edit/{user}', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::patch('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});
