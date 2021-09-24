<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticiaint extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','noticia','status','users_id','url'];

    public function User(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function imagei(){
        return $this->morphOne(imagei::class,'imageable');
    }

}
