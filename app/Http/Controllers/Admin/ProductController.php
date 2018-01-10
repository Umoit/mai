<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
    //后台产品列表
    public function index(){
    	$products = Product::paginate(25);
    	return view('admin.productList',compact('products'));
    }

    //展示产品
    public function show($id){
        $product = Product::findOrFail($id);
    	return view('front.productShow',compact('product'));

    }

    //添加产品
    public function create(){
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.productEdit',compact('product','categories','brands'));

    }

    //编辑产品
    public function edit($id){

        $product = Product::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.productEdit',compact('product','categories','brands'));

    }

    public function store(Request $request){
        
        $this->validate($request, [
            'sku' => 'unique:product',
        ]);
        $input = $request->all();
        
        //dd($input);exit();
        //新建产品
        $path = " ";
        if ($request->file('image_data')!==null) {
            foreach ($request->file('image_data') as $value) {
                $path .=  $value->store('product').';';
             } 
        }
        
        $newProduct = [
            'name' => $input['name'],
            'sku' => $input['sku'],
            'img' => $path,
            'title' => $input['title'],
            'keywords' => $input['keywords'],
            'description' => $input['description'],
            'content' => $input['content'],
            'price' => $input['price'],
            'category_id' => $input['category_id'],
            'brand_id' => $input['brand_id'],
            'preview' => $input['preview'],
            'position' => $input['position'],
        ];

        $product = Product::create($newProduct);


        return redirect()->back()->with(['flash_success' => '创建产品成功!']);

    }

    //更新产品
    public function update(Request $request){

        $input = $request->all();
        
        //dd($input);exit();
        //新建产品
        //$path = "";
        // if ($request->file('image_data')!==null) {
        //     foreach ($request->file('image_data') as $value) {
        //         $path .=  $value->store('product').';';
        //      } 
        // }
        
        $newProduct = [
            'name' => $input['name'],
            'sku' => $input['sku'],
            'img' => $input['image_path'],
            'title' => $input['title'],
            'keywords' => $input['keywords'],
            'description' => $input['description'],
            'content' => $input['content'],
            'price' => $input['price'],
            'category_id' => $input['category_id'],
            'brand_id' => $input['brand_id'],
            'preview' => $input['preview'],
            'position' => $input['position'],
        ];

        $product = Product::findOrFail($request->input('id'));
        $product->update($newProduct);
        //dd($product);
        return redirect('admin/product')->with(['flash_success' => '更新产品成功!']);
    }

    //删除产品
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('admin/product')->with(['flash_success' => '删除产品成功!']);

    }
}
