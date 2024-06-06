<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function read(){

        $posts = Post::limit(1)->get();
        return $posts;
    }
}
