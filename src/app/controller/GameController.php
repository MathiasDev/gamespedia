<?php

namespace app\controller;

use app\model\Game;
use app\view\GameView;

class GameController
{
    public function __construct()
    {
    }

    public function listeMario(){
		$list = Game::where('name', 'like', '%Mario%')->get();
		$vue = new GameView($list);
		$vue->mario();
    }
	
	public function listJeux(){
		$list = Game::take(442)->skip(21173)->get();
		$vue = new GameView($list);
		$vue->listJeux();
	}
	
	public function listJeuxByNomDeck($pages){
		$list =null;
		if($pages != 1){
			$list = Game::take(500)->skip(500*$pages)->get();
		}else{
			$list = Game::take(500)->get();
		}
		$vue = new GameView($list);
		$vue->jeuxByPage();
	}
	
	public function jeuxParSony(){
		$list = Game::where('developers','like','%Sony%' );
		$vue = new GameView($list);
		$vue->listJeux();
	}
	
	public function ratingMario(){
		$list = Game::where('original_game_ratings',)
	}
}