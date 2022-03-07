<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use GeoIp2\Database\Reader;

return function (App $app){
$app->get('/', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'ipform.twig');
});
$app->post('/', function ($request, $response, $args) {
    try {
        $ip = $request->getParsedBodyParam('ip') ? trim($request->getParsedBodyParam('ip')) : '';
        $reader = new Reader('GeoIP2-City.mmdb');
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
};