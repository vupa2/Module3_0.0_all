<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return Post::class;
    }

    public function getAll()
    {
        return $this->model->paginate(config('paginate.list_request'));
    }
}
