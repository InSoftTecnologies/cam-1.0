<?php
class Medicamento extends Eloquent{
	protected $table = 'medicamentos_controlados';
    public $timestamps=false;
    public function medicamentos_controlados_has_historial_medico()
    {
        return $this->belongsTo('medicamentos_controlados_has_historial_medico','id','medicamentos_controlados_id');
    }
}