<?php
class MedicamentoHistorial extends Eloquent{
	protected $table = 'medicamentos_controlados_has_historial_medico';
    public $timestamps=false;
    public function medicamentos_controlados()
    {
        return $this->hasOne('medicamentos_controlados','id','medicamentos_controlados_id');
    }
}