<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    use HasFactory;

     //Relacion muchos a muchos
     public function User(){
        return $this->belongsTo(User::class);
    }
}
