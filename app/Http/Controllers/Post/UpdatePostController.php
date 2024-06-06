<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;

class UpdatePostController extends Controller
{
    public function updatePost(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return response([]);
    }
}
