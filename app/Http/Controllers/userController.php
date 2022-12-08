<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function monir(){
        return view('user.index');
    }
    public function login(){
        return view('user.login');
           
    }
}