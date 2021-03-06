<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Personal extends Model
{
    protected $table ="personal";

    protected $fillable =[
	'nombres','apellidos','cedula','tlf_movil','tlf_casa','direccion','nivel','entrada','estado'
	];

    public function empleado(){
    	return $this->hasOne('App\Empleado');
    }
    public function tripulante(){
    	return $this->hasOne('App\Tripulante');
    }

    Public function cesta_tickets(){
        return $this->hasMany('App\Cesta_ticket');
    }
    public function user(){
        return $this->hasOne('App\User');
    }

    public function vauches(){
        return $this->hasMany('App\Vauche');
    }

    public function scopeBuscarCI($query, $dato){
        return $query->where('cedula',$dato);
    }

    public function scopeCargos($query){
        return DB::select("SELECT empleados.cargo
                                FROM personal
                                JOIN empleados ON personal.id=empleados.personal_id
                                GROUP BY empleados.cargo
                                UNION
                                SELECT tripulantes.rango
                                FROM personal
                                JOIN tripulantes ON personal.id=tripulantes.personal_id
                                GROUP BY tripulantes.rango");
    }

    public function scopePcargo($query, $dato, $idS){
        if(($idS==0)||($idS=='0')){
            return DB::select("SELECT personal.id as personal_id, personal.nombres,personal.apellidos,personal.cedula,personal.tlf_movil,personal.tlf_casa,personal.direccion,personal.estado, empleados.cargo,tripulantes.rango,empleados.sucursal_id, sucursales.nombre as sucursal
            FROM personal
            LEFT join empleados ON personal.id=empleados.personal_id
            LEFT join tripulantes ON personal.id=tripulantes.personal_id
            LEFT JOIN sucursales ON empleados.sucursal_id=sucursales.id
            WHERE personal.estado='activo' AND (empleados.cargo='$dato' OR tripulantes.rango='$dato') order by(personal.apellidos)");
        }
        else{
            return DB::select("SELECT personal.id as personal_id, personal.nombres,personal.apellidos,personal.cedula,personal.tlf_movil,personal.tlf_casa,personal.direccion,personal.estado, empleados.cargo,tripulantes.rango,empleados.sucursal_id, sucursales.nombre as sucursal
            FROM personal
            LEFT join empleados ON personal.id=empleados.personal_id
            LEFT join tripulantes ON personal.id=tripulantes.personal_id
            LEFT JOIN sucursales ON empleados.sucursal_id=sucursales.id
            WHERE personal.estado='activo' AND ((empleados.cargo='$dato' OR tripulantes.rango='$dato')AND(empleados.sucursal_id='$idS')) order by(personal.apellidos)");
        }
    }

    public function scopeOrdenados($query, $idS){
        if(($idS==0)||($idS=='0')){
            return DB::select("SELECT personal.id as personal_id, personal.nombres,personal.apellidos,personal.cedula,personal.tlf_movil,personal.tlf_casa,personal.direccion,personal.estado, empleados.cargo,tripulantes.rango,empleados.sucursal_id, sucursales.nombre as sucursal FROM personal LEFT join empleados ON personal.id=empleados.personal_id LEFT join tripulantes ON personal.id=tripulantes.personal_id LEFT JOIN sucursales ON empleados.sucursal_id=sucursales.id order by(personal.apellidos)");
        }
        else{
            return DB::select("SELECT personal.id as personal_id, personal.nombres,personal.apellidos,personal.cedula,personal.tlf_movil,personal.tlf_casa,personal.direccion,personal.estado, empleados.cargo,tripulantes.rango,empleados.sucursal_id, sucursales.nombre as sucursal FROM personal LEFT join empleados ON personal.id=empleados.personal_id LEFT join tripulantes ON personal.id=tripulantes.personal_id LEFT JOIN sucursales ON empleados.sucursal_id=sucursales.id where empleados.sucursal_id='$idS' order by(personal.apellidos)");
        }
    }

    public function scopePsucursal($query, $dato){
        return DB::select("SELECT personal.id as personal_id, personal.nombres,personal.apellidos,personal.cedula,personal.tlf_movil,personal.tlf_casa,personal.direccion,personal.estado, empleados.cargo,tripulantes.rango,empleados.sucursal_id, sucursales.nombre as sucursal FROM personal LEFT join empleados ON personal.id=empleados.personal_id LEFT join tripulantes ON personal.id=tripulantes.personal_id LEFT JOIN sucursales ON empleados.sucursal_id=sucursales.id WHERE empleados.sucursal_id='$dato' order by(personal.apellidos)");
    }

}
