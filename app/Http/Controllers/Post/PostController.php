<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function post()
    {
        return view('post.post',
            [
            ]);
    }
}
