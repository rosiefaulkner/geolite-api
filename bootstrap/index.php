<?php

namespace Rosiefaulkner\API;

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

require  __DIR__ . '/../vendor/autoload.php';

// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
$container->set('view', function () {
    return Twig::create(
        __DIR__ . '/../templates',
        ['cache' => __DIR__ . '/../cache']
    );
});

// Settings
$settings = require __DIR__ . '/../app/settings.php';
$settings($container);


// Create App
$app = AppFactory::create();

// Add Twig-View Middleware
$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

// Routes
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

// Run the app
$app->run();
