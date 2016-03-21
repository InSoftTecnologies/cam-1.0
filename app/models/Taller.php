<?php
class Taller extends Eloquent{
	protected $table = 'talleres';
    public $timestamps=false;
    public function profesores_has_talleres()
    {
        return $this->belongsTo('profesores_has_talleres','id','talleres_id');
    }
    public function inventarios()
    {
        return $this->belongsTo('inventarios','id','taller_id');
    }
    public function alumnos()
    {
        return $this->belongsTo('alumnos','id','taller_id');
    }
}