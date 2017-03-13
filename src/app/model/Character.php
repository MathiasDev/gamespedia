<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $table = 'character';

    protected $primaryKey = 'id';
    public $timestamps = false;
	
	public function Company(){
		return $this->belongsTo('\app\model\Game','id');
	}
}