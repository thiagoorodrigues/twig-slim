<?php

namespace app\controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends Controller
{
    public function index(Request $req, Response $res, array $args)
    {
        $this->view('home', [
            'title' => 'Home',
        ]);
    }
}
