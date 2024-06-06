<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;

class StorePostController extends Controller
{
    public function storePost(StorePostRequest $request)
    {
        $data = $request->validated();
        $post = Post::create($data);
        return response([]);
    }
}
