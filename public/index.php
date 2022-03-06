<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require  __DIR__ . '/../vendor/autoload.php';

// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
$container->set('view', function() {
    return Twig::create(__DIR__ . '/../templates',
        ['cache' => __DIR__ . '/../cache']);
});

// Create App
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

// Example route
$app->get('/', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'ipform.twig');
});
$app->get('/{ip}', function ($request, $response, $args) {
    $ip = $request->getAttribute('ip');
    return $this->get('view')->render($response, 'ipform.twig', [
        'ip' => $args['ip'],
    ]);
});

// Run the app
$app->run();