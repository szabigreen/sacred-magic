
<?php
require('../vendor/autoload.php');
$app['debug'] = true;
// Our web handlers
$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});
$app->run();
