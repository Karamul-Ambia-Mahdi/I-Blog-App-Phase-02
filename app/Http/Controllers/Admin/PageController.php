<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
