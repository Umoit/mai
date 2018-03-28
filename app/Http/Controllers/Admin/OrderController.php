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

   //显示订单
   public function show($id){
   	$order = Order::findOrFail($id);
   	return view('admin.orderShow',compact('order'));
   }
}
