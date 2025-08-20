<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {    
        return view('pages.index');
    }

    public function categories()
    {    
        return view('pages.categories');
    }

    public function login()
    {    
        return view('pages.login');
    }

    public function register()
    {    
        return view('pages.register');
    }

    public function singleBlog()
    {    
        return view('pages.single-blog');
    }

    public function profile()
    {    
        return view('pages.profile');
    }
}
