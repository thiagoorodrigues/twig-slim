<?php

namespace app\controllers;

use app\models\PostsModel;

class PostsController extends Controller
{
    public function index()
    {
        $posts = new PostsModel();
        $posts = $posts->getAll();

        $this->view('posts', [
            'title' => 'Posts',
            'posts' => $posts,
        ]);
    }
}
