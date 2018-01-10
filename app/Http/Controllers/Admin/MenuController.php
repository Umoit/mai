<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Menu;

class MenuController extends Controller
{
    //菜单
    public function index(){
    	$menus = Menu::where('parent_id','==',0)->paginate(100);
    	return view('admin.menuList',compact('menus'));
    }

    //编辑菜单
    public function edit($id){

        $product = Product::findOrFail($id);
        return view('backend.productEdit',compact('product'));

    }
    //添加菜单
    public function store(Request $request){
        $menu = $request->validate([
            'name' => 'required',
            'url' => 'required',
            'parent_id' => 'required'
            ]);
        $menu = Menu::create($menu);

        return redirect('admin/menu')->with(['flash_success' => '创建菜单成功!']);

    }

    //删除菜单
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('product')->with(['flash_success' => '删除产品成功!']);

    }

}
