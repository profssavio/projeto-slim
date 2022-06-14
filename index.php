<?php
declare ( strict_types = 1 );
ini_set( 'error_reporting', E_ALL );

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require_once './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ );
$dotenv->load();

$containerBuilder = new ContainerBuilder();

// criação dos container
$containerBuilder->addDefinitions( require_once __DIR__ . '/container.php' );

$container = $containerBuilder->build();

// Instancia o Slim App
$app = AppFactory::createFromContainer( $container );

// Registra os middleware
// Registra as routes
( require_once __DIR__ . '/middleware.php' )( $app );

// Registra as routes
( require_once __DIR__ . '/routes' )( $app );

$app->run();