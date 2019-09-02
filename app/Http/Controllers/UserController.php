<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function home()
    {
        return view('user/index');
    }

}