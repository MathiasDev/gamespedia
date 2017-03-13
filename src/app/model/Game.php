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
<<<<<<< HEAD
	
	public function Character(){
		return $this->hasMany('\app\model\Character','id');
	}
}
=======

    public function companyAsDeveloper(){
        return $this->belongsToMany('app\model\Company', 'game_developers', 'game_id', 'comp_id');
    }

    public function original_game_ratings(){
        return $this->belongsToMany('app\model\GameRating', 'game2rating', 'game_id', 'rating_id');
    }
}
>>>>>>> 8478ce63c4c5b0161a481163755d81667f562aed
