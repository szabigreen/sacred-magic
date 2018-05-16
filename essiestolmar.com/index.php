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

/*$app->get('/', function(){
	return "Hello world";
});
**/

$app->run();


/*

use Application as SacredApp;
$app = new SacredApp();


$app['debug'] = true;
include_once("index-single-product.html");


// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));
// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// own
$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return str_repeat('Hello', getenv('TIMES'));
});

$app->run();
*/