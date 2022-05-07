<?php

namespace APP\Controllers;
use App\Models\Post;

class PostController
{
    public function index()
    {
        require_once APP_ROOT.'/view/posts.php';
    }
}

