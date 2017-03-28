<?php
include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";
use app\model\Game;
$app = new \Slim\Slim();
\conf\ConnectionFactory::setConfig('src/conf/db.conf.ini');
$db = \conf\ConnectionFactory::makeConnection();


//TD1 Q1
$app->get('/jeux/mario', function(){
    foreach(Game::where('name', 'like', '%Mario%')->get() as $jeu){
        echo $jeu->id . ' ' . $jeu->name . '<br>';
    }
});

//TD1 Q2
$app->get('/company/japon', function(){
    $controleur = new \app\controller\CompanyController();
    $controleur->listeJapon();
});

//TD1 Q3
$app->get('/jeux/plateform/dixmillek', function(){
    $controleur = new \app\controller\PlatformController();
    $controleur->listesupp();
});

//TD1 Q4
$app->get('/jeux/listJeux', function(){
    $controleur = new \app\controller\GameController();
    $controleur->listJeux();
});

//TD1 Q5
$app->get('/jeux/listByPage/:pages', function($pages){
	$controleur = new \app\controller\GameController();
	$controleur->listJeuxByNomDeck($pages);
});



//TD2 Q1
$app->get('/jeux/persosjeux', function(){
	$controleur = new \app\controller\GameController();
	$controleur->persojeu();
});

//TD2 Q2
$app->get('/jeux/mario/personnages', function () {
    $controleur = new \app\controller\GameController();
    $controleur->persoJeuxMario();
});

//TD2 Q3
$app->get('/company/sony', function(){
    $controleur = new \app\controller\CompanyController();
    $controleur->listeSony();
});

//TD2 Q4
//TODO : Bug sur le ratinBoard
$app->get('/jeux/ratingMario', function(){
    $controleur = new \app\controller\GameController();
    $controleur->ratingJeuxMario();
});

//TD2 Q5
$app->get('/jeux/mario/3pers', function(){
    $controleur = new \app\controller\GameController();
    $controleur->jeuxMario3Persos();
});


$app->get('/jeux/cero3', function () {
    $controleur = new \app\controller\GameController();
    $controleur->jeuxMarioCompIncRating3Cero();

});

$app->run();