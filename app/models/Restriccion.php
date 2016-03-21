<?php
class Restriccion extends Eloquent{
	protected $table = 'restriccion_actividad_fisica';
    public $timestamps=false;
    public function restriccion_actividad_fisica_has_historial_medico()
    {
        return $this->belongsTo('restriccion_actividad_fisica_has_historial_medico','id','restriccion_actividad_fisica_id');
    }
}