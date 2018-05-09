<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);


require __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->get('/', function(){
	return "Hello world";
});


$app->get('/a', function(){
	return new Symfony\Component\HttpFoundation\Response("Hello world");
});

//$app->run();