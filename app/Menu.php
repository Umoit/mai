<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $guarded = [];


    public function subMenus()
    {
        return $this->hasMany('App\Menu', 'parent_id');
    }

    

    
}
