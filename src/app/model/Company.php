<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'company';

    protected $primaryKey = 'id';
    public $timestamps = false;
	
	public function Game(){
		return $this->hasMany('\app\model\Game','id');
	}

    public function gamesAsPublisher(){
        return $this->belongsToMany('app\model\Game', 'game_publishers', 'comp_id', 'game_id');
    }
    public function gamesAsDeveloper(){
        return $this->belongsToMany('app\model\Game', 'game_developers', 'comp_id', 'game_id');
    }
}