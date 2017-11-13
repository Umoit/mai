<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
	//图片储存
    public function imageUpload(Request $request){
    	//后台PHP处理上传的文件 （laravel5.*）

        $path =  $request->file('image_data')->store('product');
 		// foreach($_FILES['image_data']['tmp_name'] as$k=>$v)  
   //      {  
   //         echo $v;
   //      } 
   //      exit();

	//dd($path);exit();
        return json_encode($path);

         
         
        //这里要注意一点,以前我们使用 mime_content_type() ,在php5.3 之后,开始使用 fileinfo 来获取文件的mime类型.所以要加入 php_fileinfo的php拓展.windows下是 php_fileinfo.dll,在php.ini文件中将 extension=php_fileinfo.dll前面的分号去掉即可.当然要重启服务器.
         
         //$path = $file -> move('storage/uploads');
        
    }


    
}

