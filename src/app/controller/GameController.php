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
	
	public function listJeux(){
		foreach(Game::whereBetween('id', [ 21173, 21615])->get()as $jeu){
			echo $jeu->id . ' ' . $jeu->name . '<br>';
		
	}
	
	public function listJeuxByNomDeck(){
		$nbjeux = 0;
		$nbpages = 0;
		foreach(Game::get() as $jeu){
				//mettre dans la page correspondante afficher méthode jeuxpages(numpage)
				if(nbjeux <= 500){
					echo $jeu->nom . "  " . $jeu->deck;
					nbjeux++;
				}else{
					echo $jeu->nom . "  " . $jeu->deck;
					nbjeux = 0;
					nbpages ++;
				}
				
			}
		}
	}
}