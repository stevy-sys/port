<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function welcome()
    {
        return view('index.welcome');
    }

    public function index()
    {
        return view('index.welcome');
    }

    public function portfolioShow()
    {
        return view('index.port-folio-show');
    }

    public function about()
    {
        return view('index.a-propos');
    }

    public function contact()
    {
        return view('index.contact');
    }

    public function portfolio()
    {
        return view('index.port-folio');
        
    }

    public function service()
    {
        return view('index.service');
    }
}
