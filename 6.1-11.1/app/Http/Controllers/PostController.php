<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFromRequest;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('customerLogin')->except(['index', 'show']); // Auth fake
    }

    public function index()
    {
        $posts = Post::latest()->paginate(3);
        return view('posts.frontend.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.frontend.create');
    }

    public function store(PostFromRequest $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post is created successfully');
    }

    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

        return view('posts.frontend.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.frontend.edit', compact('post'));
    }

    public function update(PostFromRequest $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post is updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post is deleted successfully');
    }
}
