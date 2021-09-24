<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestion extends Model
{
    use HasFactory;
    protected $fillable = ['fprogramas','programa','gestion','gestor','estado','razon','personas_id','users_id'];
    //Relacion uno a muchos inversa

    public function User(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function persona(){
        return $this->BelongsTo(persona::class,'personas_id');
    }
}
