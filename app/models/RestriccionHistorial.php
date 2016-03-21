<?php
class RestriccionHistorial extends Eloquent{
	protected $table = 'restriccion_actividad_fisica_has_historial_medico';
    public $timestamps=false;
    public function restriccion_actividad_fisica()
    {
        return $this->hasOne('restriccion_actividad_fisica','id','restriccion_actividad_fisica_id');
    }
    public function historial_medico()
    {
        return $this->hasOne('historial_medico','id','historial_medico_id');
    }
}