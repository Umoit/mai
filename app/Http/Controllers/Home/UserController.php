<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UserController extends Controller
{
    //登录
    public function getLogin(){
    	return view('home.userLogin');

    }
    public function postLogin(Request $request){
    	if (Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])) {
   			return redirect()->intended(route('home'));
   		}else{
   			return redirect(route('login'))->with(['flash_danger' => '账号密码错误!']);
   		}
    }


    //注册
    public function getRegister(){
    	return view('home.userRegister');

    }
    public function postRegister(Request $request){
    	$this->validate($request,
    	[
            'name' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'captcha' => 'required|captcha',
        ],
     	[
            'name.required' => '用户名不能为空',
            'name.max' => '用户名不能超过50个字符',
            'name.unique' => '用户名已经被占用',
            'email.unique' => '邮箱已经被占用',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'password.min' => '密码最少六位数',
            'password.required' => '密码不能为空',
            'password.confirmed' => '两次密码不一致',
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '验证码不正确',
        ]);


        $user = User::create($request->all());


        return redirect()->route('home');


    }

    //验证
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'captcha' => 'required|captcha',
        ], [
            'name.required' => '用户名不能为空',
            'name.max' => '用户名不能超过50个字符',
            'name.unique' => '用户名已经被占用',
            'email.unique' => '邮箱已经被占用',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'password.min' => '密码最少六位数',
            'password.required' => '密码不能为空',
            'password.confirmed' => '两次密码不一致',
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '验证码不正确',
        ]);
    }

    public function logout(){
   		Auth::guard('web')->logout();
   		return view('home.userLogin');

   	}


}
