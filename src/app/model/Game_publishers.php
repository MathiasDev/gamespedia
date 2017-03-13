<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 13/03/17
 * Time: 10:19
 */

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Game_publishers extends Model
{
    protected $table = 'game_publishers';
    protected $primaryKey = 'id';
    public $timestamps = false;
}