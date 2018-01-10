<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facedes\Storage;
class FileController extends Controller
{
	//图片储存
    public function imageUpload(Request $request){
    	//后台PHP处理上传的文件 （laravel5.*）

       // $path =  $request->file('image_data')->store('uoloads');
        //$path =  Storage::disk('uploads')->put()$request->file('image_data')->store('uoloads');
        //$path = Storage::putFile('uploads', new File('/product/'),$request->file('image_data'));
       //        1.首先检查文件是否存在

        $this->validate($request, [
            'image_data' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('image_data');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['imagename']);

        $path = 'uploads/'.$input['imagename'];

        return json_encode($path);


    }
}

