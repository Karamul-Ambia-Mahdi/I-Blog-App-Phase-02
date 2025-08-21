<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryVRequest;

class CategoryController extends Controller
{
    public function categoryCreate(CategoryVRequest $request)
    {
        $validated = $request->validated();

        Category::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'parent_category' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect(route('admin.category-create-page'))->with([
            'success' => "Category created successfully."
        ]);
    }

    public function categoryList()
    {
        $categories = Category::paginate(2);

        return view('pages.admin.category-list', ["categories" => $categories]);
    }
}
