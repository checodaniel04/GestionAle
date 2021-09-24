<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class persona extends Model
{
    use HasFactory;
    protected $fillable = ['name','correo','telefono','calle','numero','fracc','cp','ciudad','estado','celector','curp','seccion','vigencia','fnacimiento','users_id','url'];

    //Relacion uno a Muchos
    public function User(){
        return $this->belongsTo(User::class,'users_id');
    }

    public function gestion(){
        return $this->hasMany(gestion::class);
    }
  
   
   
}
