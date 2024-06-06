<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('pages/home');
    }
    public function about()
    {
        echo view('pages/about');
    }


}
