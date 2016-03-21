<?php
class Direccion extends Eloquent{
	protected $table = 'direcciones';
    public $timestamps=false;
    public function direcciones_alumnos()
    {
        return $this->belongsTo('direcciones_alumnos','id','direcciones_id');
    }
    public function direcciones_tutores()
    {
        return $this->belongsTo('direcciones_tutores','id','direcciones_id');
    }
    public function direcciones_trabajadores()
    {
        return $this->belongsTo('direcciones_trabajadores','id','direcciones_id');
    }
}