<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compliant extends Model
{
     public function messages()
    {
        return $this->hasMany('App\Models\Message', 'compliant_id');
    }
}
