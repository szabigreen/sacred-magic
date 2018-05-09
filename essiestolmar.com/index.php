<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);


require __DIR__.'/../vendor/autoload.php';

echo __DIR__.'../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

//$app->get('/hello/{name}', function($name) use($app) {
//    return 'Hello '.$app->escape($name);
//});

//$app->run();

echo 'HELLo';
