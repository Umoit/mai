<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use Webpatser\Uuid\Uuid;
use Auth;
use DB;
use App\Order;
use App\OrderItem;
class OrderController extends Controller
{
    
    public function confirm(){
    	
    	$result = \Youzan::request('youzan.pay.qrcode.create', [
                    'qr_type' => 'QR_TYPE_DYNAMIC',  // 这个就不要动了
                    'qr_price' => 10,  // 金额：分
                    'qr_name' => 'iPhone 8 plus 64G 金色', // 收款理由
                    'qr_source' => '102828399222', // 自定义字段，你可以设置为网站订单号
                ]);
        //dd($result);

    	//echo Uuid::generate()->node;die();
    	return view('home.orderConfirm',compact('result'));


    }

    public function pay(Request $request){
    	$orderData = [];	

    	$orderData['order_no'] = Uuid::generate()->node;
    	$orderData['total'] = Cart::total();
    	$orderData['user_id'] = Auth::guard('web')->user()->id;

    	DB::beginTransaction();
    	try{
    		//$orderRes = Order::create($orderData);
    		$orderResId = Order::create($orderData)->id;
    		foreach (Cart::all() as $item) {
    			//DB::table('detail')->insert([	['order_id' => $data1['order_id'],'good_id' => $o]]);
    			
    			OrderItem::create(['order_id'=>$orderResId,'product_id'=>$item->id,'qty'=>$item->qty]);
    			
    		}
    		DB::commit();

    	}catch(Exception $e){

    		DB::rollback();
    	}

    	Cart::clean();
           
    	
    }

}
