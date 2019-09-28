<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        //$logger->pushProcessor(new \Monolog\Processor\IntrospectionProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    // firebase
    $container['firebase'] = function ($c) {
        $settings = $c->get('settings')['firebase'];
        $c->get('logger')->info('Firebase get');
        $serviceAccount = \Kreait\Firebase\ServiceAccount::fromArray([$settings]);
        $c->get('logger')->info('Service Account has ClientID' . $serviceAccount->hasClientId() . ', has PrivateKey' . $serviceAccount->hasPrivateKey());
        $firebase = (new \Kreait\Firebase\Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri($settings['DatabaseURL'])
            ->create();
        return $firebase;
    };

    // 403 handler
    $container['notAllowedHandler'] = function ($c) {
        return function ($request, $response) use ($c) {
            $c->get('logger')->error('403, somehow...', $request, $response);
            return $response->withStatus(403)
                ->withHeader('Content-Type', 'text/html')
                ->write('403 - Not Allowed <br />I don\'t even know how you did that.');
        };
    };

    // 404 handler
    $container['notFoundHandler'] = function ($c) {
        return function ($request, $response) use ($c) {
            $c->get('logger')->error('404', $request);
            return $response->withStatus(404)
                ->withHeader('Content-Type', 'text/html')
                ->write('404 - Page not found');
        };
    };

    // 405 handler
    $container['notAllowedHandler'] = function ($c) {
        return function ($request, $response, $methods) use ($c) {
            $c->get('logger')->error('405', $request);
            return $response->withStatus(405)
                ->withHeader('Allow', implode(', ', $methods))
                ->withHeader('Content-type', 'text/html')
                ->write('Method must be one of: ' . implode(', ', $methods));
        };
    };
    // 500 handler
    $container['errorHandler'] = function ($c) {
        return function ($request, $response, $exception) use ($c) {
            $c->get('logger')->error('500, somehow...');
            return $response->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong! <br /> I\'m impressed! Something broke in a way that SOME of the page still works.');
        };
    };
};
