<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        return view('header').view('menu').view('blog').view('footer');
    }
}
