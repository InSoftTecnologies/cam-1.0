<?php
class Funcion extends Eloquent{
	protected $table = 'funcion';
    public $timestamps=false;
    public function categoria()
    {
        return $this->belongsTo('categoria','id','funcion_id');
    }
}