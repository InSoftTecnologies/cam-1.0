<?php
class Historial extends Eloquent{
	protected $table = 'historial_medico';
    public $timestamps=false;
    public function alergias_medicas_has_historial_medico()
    {
        return $this->belongsTo('alergias_medicas_has_historial_medico','id','historial_medico_id');
    }
    public function restriccion_actividad_fisica_has_historial_medico()
    {
        return $this->belongsTo('restriccion_actividad_fisica_has_historial_medico','id','historial_medico_id');
    }
    public function cirugias_has_historial_medico()
    {
        return $this->belongsTo('cirugias_has_historial_medico','id','historial_medico_id');
    }
    public function medicamentos_controlados_has_historial_medico()
    {
        return $this->belongsTo('medicamentos_controlados_has_historial_medico','id','historial_medico_id');
    }
    public function alumnos()
    {
        return $this->hasOne('alumnos','id','alumnos_id');
    }
}