
<?php
require('../vendor/autoload.php');

ini_set('include_path', '/vendor/silex/src/Silex');
use Silex\Application() as SacredApp;
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

?>

