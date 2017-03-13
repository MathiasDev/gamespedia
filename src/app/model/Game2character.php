<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $table = 'game2character';

    protected $primaryKey = 'game_id';
    public $timestamps = false;
	
	public function Game2character(){
		return $this->hasMany('\app\model\Game2character','game_id');
	}
}