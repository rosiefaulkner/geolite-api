<?php

declare(strict_types=1);

namespace Tests;

use DI\ContainerBuilder;
use Exception;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Factory\AppFactory;
use GeoIp2\Database\Reader;

class RoutesTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @return App
     * @throws Exception
     */
    protected function getAppInstance(): App
    {
        // Instantiate PHP-DI ContainerBuilder
        $containerBuilder = new ContainerBuilder();

        // Container intentionally not compiled for tests.

        // Set up settings
        $settings = require __DIR__ . '/../app/settings.php';
        $settings($containerBuilder);

        // Build PHP-DI Container instance
        $container = $containerBuilder->build();

        // Instantiate the app
        AppFactory::setContainer($container);
        $app = AppFactory::create();

        // Register middleware
        $middleware = require __DIR__ . '/../app/middleware.php';
        $middleware($app);

        // Register routes
        $routes = require __DIR__ . '/../app/routes.php';
        $routes($app);

        return $app;
    }
    /**
     * @dataProvider ipToLocationProvider
     */
    public function testConverToHtml($ip, $isoCode, $postalCode, $cityName, $timeZone, $accuracyRadius)
    {
        $reader = new Reader('/../public/GeoIP2-City.mmdb');
        $this->assertEquals(
            $ip,
            [
                $record = $reader->city($ip),
                $isoCode = $record->country->isoCode,
                $postalCode = $record->postal->code,
                $cityName = $record->city->name,
                $timeZone = $record->location->timeZone,
                $accuracyRadius = $record->location->accuracyRadius
            ]
        );
    }

    public function ipToLocationProvider()
    {
        return [
            [
                '76.235.208.181',
                'Country Code: US',
                'Postal Code: 33325',
                'City Name: Fort Lauderdale',
                'Time Zone: America/New_York',
                'Accuracy Radius: 5'
            ]
        ];
    }
}
