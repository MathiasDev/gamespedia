<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 30/03/17
 * Time: 09:20
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'id';
    public $timestamps = false;

    public function comments() {
        return $this->hasMany('app\model\User');
    }

}