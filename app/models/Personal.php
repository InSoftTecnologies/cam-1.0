<?php
class Personal extends Eloquent{
	protected $table = 'personal';
    public $timestamps=false;
    public function usuario()
    {
        return $this->belongsTo('usuarios','id','personal_id');
    }
}