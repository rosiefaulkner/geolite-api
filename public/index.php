<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use GeoIp2\Database\Reader;

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

// Create App
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

// Routes
$app->get('/', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'ipform.twig');
});
$app->post('/', function ($request, $response, $args) {
    $reader = new Reader('GeoIP2-City.mmdb');
    $ip = $request->getParsedBodyParam('ip') ? $request->getParsedBodyParam('ip') : '';
    $record = $reader->city($ip);
    return $this->get('view')->render($response, 'ipform.twig', [
        'ip' => $ip,
        'isoCode' => $record->country->isoCode,
        'postalCode' => $record->postal->code,
        'cityName' => $record->city->name,
        'timeZone' => $record->location->timeZone,
        'accuracyRadius' => $record->location->accuracyRadius,
    ]);
});

// Run the app
$app->run();
