<?php

use Slim\App;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $setting = $app->getContainer()->get('settings');
    $app->add(TwigMiddleware::createFromContainer($app));
    $app->addErrorMiddleware(true, true, true);
    $app->addErrorMiddleware(
        $setting['displayErrorDetails'],
        $setting['logErrors'],
        $setting['logErrorDetails']
    );
};
