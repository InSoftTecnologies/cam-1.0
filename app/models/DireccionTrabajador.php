<?php
class DireccionTrabajador extends Eloquent{
	protected $table = 'direcciones_trabajadores';
    public $timestamps=false;
    public function direcciones()
    {
        return $this->hasOne('direcciones','id','direcciones_id');
    }
    public function trabajadores()
    {
        return $this->hasOne('trabajadores','id','trabajadores_id');
    }
}