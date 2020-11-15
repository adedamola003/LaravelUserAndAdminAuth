<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Compliant extends Model
{
     public function messages()
    {
        return $this->hasMany('App\Models\Message', 'compliant_id');
    }

      public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }

    public function adminName(){
        return $this->belongsTo('App\Admin', 'admin_id');
    }
}
