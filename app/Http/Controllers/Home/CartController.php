<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;

class CartController extends Controller
{
    //主页
    public function index(){
        $cart = Cart::all();
        return view('Home.cart',compact('cart'));

    }



    public function add(Request $request){
        $data = $request->all();
        $product = Product::findorfail($data['id']);

        $row = Cart::add($data['id'], $product->name, $data['qty'], $product->price, ['color' => 'red', 'size' => 'M']);

        return $product;
    	//echo "string";
    	//return view('front.home');
        //$row = Cart::add(1, 'Item name', 2, 100.00, ['color' => 'red', 'size' => 'M']);
    }

    public function remove(){
    	Cart::remove(37);
    }

    public function update(){
        $product = Product::findorfail(1);

    }

    public function clean(){
        $row = Cart::clean();

    }

    public function show(){

    	dd(Cart::all());
    }
}
