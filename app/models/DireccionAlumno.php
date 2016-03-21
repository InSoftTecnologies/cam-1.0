<?php
class DireccionAlumno extends Eloquent{
	protected $table = 'direcciones_alumnos';
    public $timestamps=false;
    public function direcciones()
    {
        return $this->hasOne('direcciones','id','direcciones_id');
    }
    public function alumnos()
    {
        return $this->hasOne('alumnos','id','alumnos_id');
    }
}