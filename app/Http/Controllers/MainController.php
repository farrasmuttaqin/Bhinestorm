<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\MainController;

class MainController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'farras']);
    }
}