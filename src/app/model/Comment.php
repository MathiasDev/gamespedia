<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 30/03/17
 * Time: 09:21
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'character';

    protected $primaryKey = 'id';
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('app\model\User');
    }

    public function game() {
        return $this->belongsTo('app\model\Game');
    }

}