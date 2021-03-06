<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cesta_ticket extends Model
{
    protected $table ="cesta_tickets";

    protected $fillable = [
        'monto','dias','personal_id','unidadTributaria_id','vouche_id'
    ];

    public function personal(){
    	return $this->belongsTo('App\Personal');
    }
    public function vouche(){
        return $this->hasOne('App\Vouche','vouche_id','id');
    }
    public function unidadTributaria(){
    	return $this->belongsTo('App\Tabulador','unidadTributaria_id','id');
    }
}
