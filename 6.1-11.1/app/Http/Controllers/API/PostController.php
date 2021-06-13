<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostFromRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all());
    }

    public function store(PostFromRequest $request)
    {
        $post = Post::create($request->validated());

        return new PostResource($post);
    }

    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch (\Exception $exception) {
            return response()->json(['message' =>'Không tìm thấy bài viết'], 404);
        }
        // $post = Post::findOrFail($id);

        return new PostResource($post);
    }

    public function update(PostFromRequest $request, Post $post)
    {
        // $post = Post::findOrFail($id);
        $post->update($request->validated());

        return new PostResource($post);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // return response()->noContent();
        return response()->json(['Xóa thành công'], 200);
    }
}
