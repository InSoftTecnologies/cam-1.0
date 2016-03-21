<?php
class CirugiaHistorial extends Eloquent{
	protected $table = 'cirugia_has_historial_medico';
    public $timestamps=false;
    public function cirugias()
    {
        return $this->hasOne('cirugias','id','cirugias_id');
    }
    public function historial_medico()
    {
        return $this->hasOne('historial_medico','id','historial_medico_id');
    }
}