<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $table = 'game';

    protected $primaryKey = 'id';
    public $timestamps = false;
	
	public function Company(){
		return $this->belongsTo('\app\model\Company','id');
	}
	
	public function Character(){
		return $this->hasMany('\app\model\Character','id');
	}
}
