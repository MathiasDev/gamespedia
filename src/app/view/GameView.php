<?php

namespace app\view;

class GameView{
	
	private $list_jeux;
	
	function __construct($listjeux){
		$this->list_jeux = $listjeux;
	}
	
	public function mario(){
		 foreach($this->list_jeux  as $jeu){
            echo $jeu->id . ' ' . $jeu->name . '<br>';
        }
	}
	
	public function listJeux(){	
		foreach($list_jeux as $jeu){
			echo $jeu->id . ' ' . $jeu->name . '<br>';
		}
	}
	
	public function jeuxByPage(){
		foreach($this->list_jeux as $jeu){
			echo $jeu->name . '<br>';
		}
	}
}
	