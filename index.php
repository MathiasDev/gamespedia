<?php
include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";
use app\model\Game;
$app = new \Slim\Slim();
\conf\ConnectionFactory::setConfig('src/conf/db.conf.ini');
$db = \conf\ConnectionFactory::makeConnection();


$app->get('/jeux/mario', function(){
//    $controleur = new \app\controller\GameController();
//    $controleur->listeMario();
    foreach(Game::where('name', 'like', '%Mario%')->get() as $jeu){
        echo $jeu->id . ' ' . $jeu->name . '<br>';
    }
});

$app->get('/company/japon', function(){
    $controleur = new \app\controller\CompanyController();
    $controleur->listeJapon();
});

$app->get('/jeux/listJeux', function(){
    $controleur = new \app\controller\GameController();
    $controleur->listJeux();
});

$app->get('/jeux/listByPage/:pages', function($pages){
	$controleur = new \app\controller\GameController();
	$controleur->listJeuxByNomDeck($pages);
});

$app->get('/jeux/cero3', function () {
    $controleur = new \app\controller\GameController();
    $controleur->jeuxMarioCompIncRating3Cero();
});

$app->run();