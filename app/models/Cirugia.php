<?php
class Cirugia extends Eloquent{
	protected $table = 'cirugias';
    public $timestamps=false;
    public function cirugias_has_historial_medico()
    {
        return $this->belongsTo('cirugias_has_historial_medico','id','cirugias_id');
    }
}