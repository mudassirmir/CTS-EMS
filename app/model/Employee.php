<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function skills(){
        return $this->hasMany('App\model\Skills');
    }
}
