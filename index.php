<?php
include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";
$app = new \Slim\Slim();
\conf\ConnectionFactory::setConfig('src/conf/db.config.ini');
$db = \conf\ConnectionFactory::makeConnection();
