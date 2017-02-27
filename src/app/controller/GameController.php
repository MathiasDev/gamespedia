<?php

namespace app\controller;
use app\model\Game;

class GameController
{
    public function __construct()
    {
    }

    public function listeMario(){
        foreach(Game::where('name', 'like', '%Mario%')->get() as $jeu){
            echo $jeu->id . ' ' . $jeu->name . '<br>';
        }
    }
}