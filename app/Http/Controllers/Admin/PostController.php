<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostVRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function createPost(PostVRequest $request)
    {
        $validated = $request->validated();

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect(route('admin.post-create-page'))->with([
            "success" => "Post created successfully."
        ]);
    }

    public function postList()
    {
        $posts = Post::with('category')->paginate(5);

        return view('pages.admin.post-list', ['posts' => $posts]);
    }
}
