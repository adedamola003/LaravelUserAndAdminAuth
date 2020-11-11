<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     public function compliants()
    {
        return $this->hasMany('App\Models\Compliant', 'order_id');
    }
}
