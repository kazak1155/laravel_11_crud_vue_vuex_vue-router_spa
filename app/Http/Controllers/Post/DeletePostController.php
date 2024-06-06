<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;

class DeletePostController extends Controller
{
    public function deletePost(Post $post)
    {
        $post->delete();
        return response([]);
    }
}
