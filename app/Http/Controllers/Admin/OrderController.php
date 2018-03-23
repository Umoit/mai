<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
   //支付页面
   public function index(){
   	return view('home.payIndex');
   }
}
