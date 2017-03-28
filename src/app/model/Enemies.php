<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;

class Enemies extends Model
{
    protected $table = 'enemies';
    protected $primaryKey = 'id';
    public $timestamps = false;
}