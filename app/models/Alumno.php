<?php
class Alumno extends Eloquent{
	protected $table = 'alumnos';
    public $timestamps=false;
    public function tutores()
    {
        return $this->belongsTo('tutores','id','alumnos_id');
    }
    public function direcciones_alumnos()
    {
        return $this->belongsTo('direcciones_alumnos','id','alumnos_id');
    }
    public function historial_medico()
    {
        return $this->belongsTo('historial_medico','id','alumnos_id');
    }
    public function talleres()
    {
        return $this->hasOne('talleres','id','taller_id');
    }
}