<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

     protected $fillable = [
        'cargo','personal_id','sucursal_id','horario_id'
    ];

    Public function sucursal(){
    	return $this->belongsTo('App\Sucursal');
    }

    Public function horario(){
        return $this->belongsTo('App\Horario');
    }

    public function personal(){
        return $this->hasOne('App\Personal');
    }
    public function datosPersonal($id){
        return Personal::find($id);
    }

    public function administrativo(){
        return $this->hasOne('App\Administrativo');
    }

    public function personal_operativo(){
        return $this->hasOne('App\Personal_operativo');
    }

    public function asistencias(){
    	return $this->hasMany('App\Asistencia');
    }

}
