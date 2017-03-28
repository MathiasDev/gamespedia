<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class GameRating extends Model
{
    protected $table = 'game_rating';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['name', 'rating_board_id'];


    public function ratingBoard(){
        return $this->belongsTo('app\model\Rating_board', 'rating_board_id');
    }
}