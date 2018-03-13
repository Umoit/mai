<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class IndexController extends Controller
{
    //主页
    public function index(){
    	return view('home.index');
    }


    //分类下产品
    public function category($id){
        $category = Category::findOrFail($id);
        $products = $category->product()->paginate(20);
        //dd($products);
    	return view('front.categoryProduct',compact('products'));
        
    }

    public function product($id){
        $product = Product::findOrFail($id);
        return view('home.product',compact('product'));

    }

    //获取分类别名

    public function getUrlName($id){
        $category = Category::findOrFail($id);
        return $category['url_name'];
    }

  
    

}
