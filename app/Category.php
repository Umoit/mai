<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'product_categories';
    protected $primaryKey = 'id';



    //生成目录树
 	public function subcats()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    
    //获取分类下的产品
    public  function product(){
    	return $this->hasMany('App\Product','category_id','id');
    }

    //分类下的文章
    public function getCategoryProducts($id){
        return DB::table('product')->orderBy('id','desc')->where('category_id',$id)->paginate(10);
    }
}
