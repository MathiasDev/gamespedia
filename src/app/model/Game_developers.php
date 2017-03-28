<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 13/03/17
 * Time: 10:18
 */

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Game_developers extends Model
{
    protected $table = 'game_developers';
    protected $primaryKey = 'id';
    public $timestamps = false;
}