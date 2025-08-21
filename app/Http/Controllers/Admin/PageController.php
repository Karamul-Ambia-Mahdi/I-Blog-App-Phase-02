<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboardPage()
    {
        return view('pages.admin.dashboard');
    }

    public function createCategoryPage()
    {
        return view('pages.admin.create-category');
    }
    
    public function createPostPage()
    {
        return view('pages.admin.create-post', ['categories' => Category::all()]);
    }
}
