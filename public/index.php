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
    try {
        $reader = new Reader('GeoIP2-City.mmdb');
        $ip = $request->getParsedBodyParam('ip') ? trim($request->getParsedBodyParam('ip')) : '';
        $record = $reader->city($ip);
        $isoCode = $record->country->isoCode;
        $postalCode = $record->postal->code;
        $cityName = $record->city->name;
        $timeZone = $record->location->timeZone;
        $accuracyRadius = $record->location->accuracyRadius;
        $error = false;
        return $this->get('view')->render($response, 'ipform.twig', [
            'ip' => $ip,
            'isoCode' => $isoCode,
            'postalCode' => $postalCode,
            'cityName' => $cityName,
            'timeZone' => $timeZone,
            'accuracyRadius' => $accuracyRadius,
            'error' => $error,
        ]);
    } catch (\Exception $e) {
        $ip = false;
        $error = 'Input a valid IP';
        return $this->get('view')->render($response, 'ipform.twig', [
            'ip' => $ip,
            'error' => $error,
        ]);
    }
});

// Run the app
$app->run();
