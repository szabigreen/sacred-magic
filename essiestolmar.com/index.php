<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);


require __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;
include_once("index-single-product.html");

$app->get("/users/{id}", function($id){
   return "User - {$id}";
});

$app->get('/', function(){
	return "Hello world";
});


$app->run();


