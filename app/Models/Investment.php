<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory; 

    //Relacion uno a muchos
    public function loads(){
        return $this->hasMany('App\Models\Load');
    }
}
