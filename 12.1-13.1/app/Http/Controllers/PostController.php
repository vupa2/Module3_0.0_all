<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFromRequest;
use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
        $this->authorizeResource(Post::class, 'post', ['except' => ['index', 'show']]);
        // $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view('posts.frontend.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.frontend.create');
    }

    public function store(PostFromRequest $request)
    {
        $this->postRepository->store($request->validated());
        return redirect()->route('posts.index')->with('success', trans('create success'));
    }

    public function show($id)
    {
        $post = $this->postRepository->find($id);
        return view('posts.frontend.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.frontend.edit', compact('post'));
    }

    public function update(PostFromRequest $request, $id)
    {
        $this->postRepository->update($id, $request->validated());
        return redirect()->route('posts.index')->with('success', trans('updated success'));
    }

    public function destroy($id)
    {
        $this->postRepository->destroy($id);
        return redirect()->route('posts.index')->with('success', trans('delete success'));
    }
}
