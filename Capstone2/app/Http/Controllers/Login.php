<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Login extends Controller
{
    public function index(){

        return view('login.index');
    }
}
