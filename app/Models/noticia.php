<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','noticia','status','users_id','url'];

    public function User(){
        return $this->belongsTo(User::class,'users_id');
    }
//relacion polimorfica

    public function image(){
        return $this->morphOne(image::class,'imageable');
    }
}
