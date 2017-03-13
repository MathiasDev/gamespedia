<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 13/03/17
 * Time: 10:22
 */


namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'theme';
    protected $primaryKey = 'id';
    public $timestamps = false;
}