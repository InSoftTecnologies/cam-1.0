<?php
class AlergiaHistorial extends Eloquent{
	protected $table = 'alergias_medicas_has_historial_medico';
    public $timestamps=false;
    public function alergias_medicas()
    {
        return $this->hasOne('alergias_medicas','id','alergias_medicas_id');
    }
    public function historial_medico()
    {
        return $this->hasOne('historial_medico','id','historial_medico_id');
    }
}