<?php
class TrabajadorTaller extends Eloquent{
	protected $table = 'profesores_has_talleres';
    public $timestamps=false;
    public function personal()
    {
        return $this->hasOne('personal','id','personal_id');
    }
    public function talleres()
    {
        return $this->hasOne('talleres','id','talleres_id');
    }
}