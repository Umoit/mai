<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    //产品分类列表
    public function index(){
    	$categories = Category::all();
    	return view('admin.categoryList',compact('categories'));
        
    }

    //编辑产品
    public function edit($id){

        $product = Product::findOrFail($id);
        return view('backend.productEdit',compact('product'));

    }
    //添加产品分类
    public function store(Request $request){
        $category = $request->validate([
            'name' => 'required',
            'url_name' => 'required|unique:product_categories',
            'parent_id' => 'required'
            ]);
        $category = Category::create($category);

        return redirect('category')->with(['flash_success' => '创建产品分类成功!']);

    }

    //删除产品
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('product')->with(['flash_success' => '删除产品成功!']);

    }
}
