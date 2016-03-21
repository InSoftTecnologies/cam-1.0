<?php
class Tutor extends Eloquent{
	protected $table = 'tutores';
    public $timestamps=false;
    public function alumnos()
    {
        return $this->hasOne('alumnos','id','alumnos_id');
    }
    public function direcciones_tutores()
    {
        return $this->belongsTo('direcciones_tutores','id','direcciones_id');
    }
}