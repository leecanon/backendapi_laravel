<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa) osea de muchos a uno :3
    public function clients(){
        return $this->belongsTo('App\Models\Client');
    }
    //Relacion uno a muchos (inversa) osea de muchos a uno :3
    public function investments(){
        return $this->belongsTo('App\Models\Investment');
    }
}


