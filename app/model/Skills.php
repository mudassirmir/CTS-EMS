<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    public function employee(){
        return $this->belongsTo('App\model\Employee');
    }
}
