<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_no', 'total', 'user_id',
    ];

 	public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
