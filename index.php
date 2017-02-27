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


$app->run();