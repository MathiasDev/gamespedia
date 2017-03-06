<?php
include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";
$app = new \Slim\Slim();
\conf\ConnectionFactory::setConfig('src/conf/db.conf.ini');
$db = \conf\ConnectionFactory::makeConnection();


$app->get('/jeux/mario', function(){
    $controleur = new \app\controller\GameController();
    $controleur->listeMario();
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

$app->run();