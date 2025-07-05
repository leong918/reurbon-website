<?php

namespace App\Http\Controllers\Web;

// use Illuminate\Http\Request;

class AppController extends BaseController
{
    public function index()
    {
        return $this->view('index');
    }

    public function about()
    {
        return $this->view('about');
    }
}
