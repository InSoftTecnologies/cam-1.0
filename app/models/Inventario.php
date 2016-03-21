<?php
class Inventario extends Eloquent{
	protected $table = 'inventarios';
    public $timestamps=false;
    public function talleres()
    {
        return $this->hasOne('talleres','id','taller_id');
    }
}