<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('layouts.home.index');
    }

    public function order()
    {
        return view('layouts.home.order');
    }
}
