<?php
use DI\ContainerBuilder;
use Slim\App;

require_once __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();

// Set up settings
$containerBuilder->addDefinitions(__DIR__ . '/container.php');

// Build PHP-DI Container instance
$container = $containerBuilder->build();

// Create App instance
$app = $container->get(App::class);

// Register routes
//(require __DIR__ . '/routes.php')($app);

// Register middleware
(require __DIR__ . '/middleware.php')($app);

return $app;






//
//declare(strict_types=1);
//
////use DI\Bridge\Slim\Bridge;
//use DI\Container;
//
//use DI\ContainerBuilder;
//use Zend\ConfigAggregator\ConfigAggregator;
//use Zend\ConfigAggregator\PhpFileProvider;
//use Slim\App;
//use Slim\Factory\AppFactory;
//
//
//chdir(dirname(__DIR__));
//require 'vendor/autoload.php';
//
//$aggregator = new ConfigAggregator([
//    new PhpFileProvider(__DIR__ . '/common/*.php'),
//	new PhpFileProvider(__DIR__ . '/' . (getenv('API_ENV') ?: 'prod') . '/*.php'),
//]);
//
//
//
//
////$config = $aggregator->getMergedConfig();
//$config = [];
//
//$container = new Container();
//AppFactory::setContainer($container);
//$app = AppFactory::create();
//$container->set('myService', function () {
//	$settings = [1=>4,2=>8,3=>56];
//	return new MyService($settings);
//});
//$myService = $app->get('myService');
//
//return $myService;


//$containerBuilder = new ContainerBuilder();
//$containerBuilder->addDefinitions($config);
//$container = $containerBuilder->build();
//$app = $container->get(App::class);
//return $app;


