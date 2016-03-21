<?php
class DireccionTutor extends Eloquent{
	protected $table = 'direcciones_tutores';
    public $timestamps=false;
    public function direcciones()
    {
        return $this->hasOne('direcciones','id','direcciones_id');
    }
    public function tutores()
    {
        return $this->hasOne('tutores','id','tutores_id');
    }
}