<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;

class BrandController extends Controller
{
    //品牌分类列表
    public function index(){
    	$brands = Brand::all();
    	return view('admin.brandList',compact('brands'));
        
    }

    //编辑产品
    public function edit($id){

        $product = Product::findOrFail($id);
        return view('backend.productEdit',compact('product'));

    }
    //添加产品分类
    public function store(Request $request){
        

        $brand = Brand::create($request->all());

        return redirect('brand')->with(['flash_success' => '创建品牌成功!']);

    }

    //删除品牌
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('product')->with(['flash_success' => '删除产品成功!']);

    }
}
