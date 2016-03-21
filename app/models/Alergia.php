<?php
class Alergia extends Eloquent{
	protected $table = 'alergias_medicas';
    public $timestamps=false;
    public function alergias_medicas_has_historial_medico()
    {
        return $this->belongsTo('alergias_medicas_has_historial_medico','id','alergias_medicas_id');
    }
}