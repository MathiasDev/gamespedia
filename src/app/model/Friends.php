<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 13/03/17
 * Time: 10:15
 */

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $table = 'friends';
    protected $primaryKey = 'id';
    public $timestamps = false;
}