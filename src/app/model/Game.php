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

    public function characters(){
        return $this->belongsToMany('app\model\Character', 'game2character', 'game_id', 'character_id');
    }

    public function companyAsDeveloper(){
        return $this->belongsToMany('app\model\Company', 'game_developers', 'game_id', 'comp_id');
    }

    public function original_game_ratings(){
        return $this->belongsToMany('app\model\GameRating', 'game2rating', 'game_id', 'rating_id');
    }
}