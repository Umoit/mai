<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
   //支付页面
   public function index(){
   	$orders = Order::paginate(50);
   	return view('admin.orderList',compact('orders'));
   }
}
