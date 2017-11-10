<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class IndexController extends Controller
{

	public function dashboard(){
		return  view('admin.dashboard');

	}
    
   	public function getLogin(){
   		return view('admin.login');

   	}

   	public function postLogin(Request $request){
   		if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])) {
   			return redirect()->intended(route('admin.dashboard'));
   		}else{
   			return redirect(route('admin.login'))->with(['flash_error' => '账号密码错误!']);
   		}

   	}


   	public function logout(){
   		Auth::guard('admin')->logout();
   		return view('admin.login');

   	}

   	public function test(){
   		echo "string";exit();
   	}
}
