<?php
include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";
use app\model\Game;
$app = new \Slim\Slim();
\conf\ConnectionFactory::setConfig('src/conf/db.conf.ini');
$db = \conf\ConnectionFactory::makeConnection();

//Sommaire
$app->get('/', function() {
    $c = new \app\controller\AppController();
    $c->sommaire();
});


//TD1 Q1
$app->get('/jeux/mario', function(){
    $c = new \app\controller\GameController();
    $c->listeMario();
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

//TD2 Q6
$app->get('/jeux/mario/rating3', function(){
    $controleur = new \app\controller\GameController();
    $controleur->jeuxMarioRating3();
});

//TD2 Q7
$app->get('/jeux/mario/rating3Inc', function(){
    $controleur = new \app\controller\GameController();
    $controleur->jeuxMario3Inc();
});

//TD2 Q8
$app->get('/jeux/cero3', function () {
    $controleur = new \app\controller\GameController();
    $controleur->jeuxMarioCompIncRating3Cero();

});

//TD2 Q9
//TODO : Ajouter un nouveau genre de jeu et l'associer aux jeux 12 56 345


// TD 3.1 ajout de la fonction de la liste de tout les jeux et les fonctions microtime dans les requetes demandés avec affichage en bas de page
$app->get('/jeux/toutjeux', function () {
    $controleur = new \app\controller\GameController();
    $controleur->toutjeux();
});

$app->get('/jeux/time', function () {
    $controleur = new \app\controller\GameController();
    $controleur->time3valeurs();
});

$app->run();
