<?php
class Categoria extends Eloquent{
	protected $table = 'categoria';
    public $timestamps=false;
    public function personal()
    {
        return $this->belongsTo('personal','id','categoria_id');
    }
    public function funcion()
    {
        return $this->hasOne('funcion','id','funcion_id');
    }
}