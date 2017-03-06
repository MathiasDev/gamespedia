<?php

namespace app\controller;
use app\model\Platform;

class PlatformController
{
    public function __construct()
    {
    }

    public function listesupp(){
        foreach(Platform::where('install_base','>=' ,'10 000 000')->get() as $plat){
            echo $plat->id . ' ' . $plat->name . '<br>';
        }
    }
}