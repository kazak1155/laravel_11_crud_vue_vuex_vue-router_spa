<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class ShowPostController extends Controller
{
    public function snowAllPost()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();

        return  [
            'data' => $posts
        ];
    }

    public function snowOmePost(Post $post)
    {
        $id = $post->id;
        $data = new PostResource($post);

        return [
            'id' => $id,
            'data' => $data
        ];
    }
}
