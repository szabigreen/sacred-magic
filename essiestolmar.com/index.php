
<?php
require('../vendor/autoload.php');
$app['debug'] = true;
include_once("index-single-product.html");

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return str_repeat('Hello', getenv('TIMES'));
});

?>

