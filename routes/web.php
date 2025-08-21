<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('/', [PageController::class, 'index'])->name('home.index');
Route::get('/categories', [PageController::class, 'categories'])->name('home.categories');
Route::get('/login', [PageController::class, 'login'])->name('sign-in');
Route::get('/register', [PageController::class, 'register'])->name('sign-up');
Route::get('/blog', [PageController::class, 'singleBlog'])->name('single-blog');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');


// Admin
Route::get('/dashboard', [AdminPageController::class, 'dashboardPage'])->name('admin.dashboard-page');
Route::get('/category-create', [AdminPageController::class, 'createCategoryPage'])->name('admin.category-create-page');
Route::get('/category-list', [AdminCategoryController::class, 'categoryList'])->name('admin.category-list-page');

Route::post('/create-category', [AdminCategoryController::class, 'categoryCreate'])->name('admin.category-create');