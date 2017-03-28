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
        $start = microtime(true);
		$list = Game::where('name', 'like', '%Mario%')->get();
		$vue = new GameView($list);
		$vue->mario();
        $time = microtime(true) - $start;
        echo '<br><br><b>Request time : '. $time . '</b>';
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
	
    public function ratingJeuxMario(){
        foreach(Game::where('name', 'like', '%Mario%')->get() as $jeu) {
            echo '<b>' . $jeu->name . '</b><br>';
            foreach ($jeu->original_game_ratings()->get() as $rating) {
                echo $rating->name . '<br>';
                //echo $rating->ratingBoard()->get()->name;
            }
        }
    }

    public function persoJeuxMario(){
        foreach(Game::where('name', 'like', '%Mario')->get() as $jeu){
            echo '<b>' . $jeu->name . '</b><br>';
            foreach($jeu->characters()->get() as $perso){
                echo $perso->name . '<br>';
            }
        }
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
        foreach(Game::where('name', 'like', 'Mario%')
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

    public function jeuxMarioRating3(){
        foreach(Game::where('name', 'like', 'Mario%')->get() as $jeu){
            foreach($jeu->original_game_ratings()->where("name", "like", "%3+%")->get() as $rating){
                echo '<b>' . $jeu->name . '</b> : '. $rating->name .'<br>';
            }
        }
    }

    public function jeuxMario3Inc() {
        foreach(Game::where('name', 'like', 'Mario%')
                    ->whereHas('original_game_ratings', function($q){
                        $q->where('name', 'like', '%3+%');
                    })
                    ->whereHas('companyAsDeveloper', function($q) {
                        $q->where('name', 'like', '%Inc.%');
                    })
                    ->get() as $game){
            echo $game->name .' <br>';
        }
    }

    public function jeuxMario3Persos(){
        foreach(Game::where('name', 'like', '%Mario')->get() as $jeu) {
            if ($jeu->characters()->count() >= 3) {
                echo '<b>' . $jeu->name . '</b><br>';
                foreach($jeu->characters()->get() as $perso) {
                    echo $perso->name . '<br>';
                }
            }
        }
    }

}