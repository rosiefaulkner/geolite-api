<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/config/geo.php';


$app = AppFactory::create();
$app->setBasePath('/public/index.php');

// Add Slim routing middleware
$app->addRoutingMiddleware();

// Set the base path to run the app in a subdirectory.
// This path is used in urlFor().
$app->add(new BasePathMiddleware($app));

$app->addErrorMiddleware(true, true, true);

// Define app routes
// $app->get('/', function (Request $request, Response $response) {
//     $response->getBody()->write('Hello, World!');
//     return $response;
// })->setName('root');

$app->get('/', function (Request $request, Response $response, $args) {
    $renderer = new PhpRenderer(__DIR__ . '/../src/templates/');
    return $renderer->render($response, 'ipform.html', $args);
});
// Login Routes
//require __DIR__ . '/../src/routes/cities.php';
//require __DIR__ . '/../src/templates/login.html';

// Run app
$app->run();
