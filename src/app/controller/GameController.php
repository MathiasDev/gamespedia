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
	
	public function persojeu(){ 
		$list = Game::where('id','like',12342)->get();
		$list2 = Game2Character::where('game_id','like',12342)->get();
		$vue = new GameView($list);
		$vue -> persosjeux();
	}

	public function listMarioPersonnages(){
		$list = Game::where('name', 'like', 'Mario%');
		$res = null;
		foreach($list as $game){
			$tmp = $game->character();
			if($tmp->get()->count()>3){
				$res += $tmp;
			}
		}
		$vue = new GameView($res);
		$vue->marioPerso();
	}


	public function jeuxParSony(){
		$list = Game::where('developers','like','%Sony%' );
		$vue = new GameView($list);
		$vue->listJeux();
	}
	
//	public function ratingMario(){
//		$list = Game::where('original_game_ratings',)
//	}

    public function jeuxMarioCompIncRating3Cero(){
        foreach(Game::where('name', 'like', '%Mario%')
                    ->whereHas('original_game_ratings', function($q){
                        $q->where('name', 'like', '%3+%');
                    })
                    ->whereHas('companyAsDeveloper', function($q) {
                        $q->where('name', 'like', '%Inc.%');
                    })
                    ->get() as $game){
            echo '####' . $game->name . ' : ' . $game->id . '<br>';
            foreach ($game->original_game_ratings as $rating) {
                echo '--------- ' . $rating->name . '<br>';
            }
            foreach($game->companyAsDeveloper as $comp){
                echo '---> publisher : ' .$comp->name . '<br>';
            }
        }
    }

}