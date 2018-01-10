<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //登录
    public function getLogin(){
    	return view('home.userLogin');

    }
}
