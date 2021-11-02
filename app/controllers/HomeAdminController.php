<?php

namespace app\controllers;

class HomeAdminController extends Controller
{
    public function index()
    {
        $this->view('admin.home', [
            'title' => 'Home Admin',
        ]);
    }
}
