<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 13/03/17
 * Time: 10:20
 */

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id';
    public $timestamps = false;
}