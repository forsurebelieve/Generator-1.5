<?php
use ACWPD\Futhark\Power;
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();
    $meta = [
        'title' => $container->get('settings')['APP_TITLE'] . $container->get('settings')['APP_VERSION'],
        'version' => $container->get('settings')['APP_VERSION'],
    ];

    /*
    $app->get('/tickets', function (Request $request, Response $response) {
    $this->logger->addInfo('Ticket list');
    $mapper = new TicketMapper($this->db);
    $tickets = $mapper->getTickets();

    $response = $this->view->render($response, 'tickets.phtml', ['tickets' => $tickets]);
    return $response;
    });

    $app->post('/ticket/new', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $ticket_data = [];
    $ticket_data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $ticket_data['description'] = filter_var($data['description'], FILTER_SANITIZE_STRING);
    });
     */

    $app->get('/', function (Request $request, Response $response) use ($container, $meta) {
        $power = new Power($container);
        $power->loadPowersDB();
        $data = $power->withRandomType()
            ->withRandomFlavor()
            ->withRandomTwist()
            ->getPowerData();
        $args = array_merge($data, $meta);

        return $container->get('renderer')->render($response, 'FullPageBigImages.phtml', $args);
    })->setName('home');

    $app->get('/list', function (Request $request, Response $response) use ($container, $meta) {
        $power = new Power($container);
        $power->loadPowersDB();
        $data = $power->withAllData()
            ->getPowerData();
        $args = array_merge($data, $meta);

        return $container->get('renderer')->render($response, 'List.phtml', $args);
    })->setName('list');

    $app->get('/credits', function (Request $request, Response $response) use ($container, $meta) {
        return $container->get('renderer')->render($response, 'Credits.phtml', $meta);
    })->setName('credits');

    $app->get('/donate', function (Request $request, Response $response) use ($container, $meta) {
        return $container->get('renderer')->render($response, 'Donate.phtml', $meta);
    })->setName('donate');

    $app->get('/load/{type_}/{flavor_}/{twist_}', function (Request $request, Response $response, array $args) use ($container) {
        $power = new Power($container);
        $power->loadPowersDB();
        $data = $power->withType($args['type_'])
            ->withFlavor($args['flavor_'])
            ->withTwist($args['twist_'])
            ->getPowerData();
        $args = array_merge($data);

        return $container->get('renderer')->render($response, 'FullPageBigImages.phtml', $args);
    })->setName('load');

    $app->get('/load/{id_}', function (Request $request, Response $response, array $args) use ($container) {
        $fb = $container->get('firebase')->getDatabase();
        $ref = $fb->getReference('saved/' . $args['id_']);
        $data = $ref->getValue();
    })->setName('loadSaved');

    $app->post('/save', function (Request $request, Response $response, array $args) use ($container) {
    });

    $app->group('/a', function (App $app) use ($container) {
        $app->group('/roll', function (App $app) use ($container) {
            $app->get('/', function (Request $request, Response $response) use ($container) {
                $power = new Power($container);
                $power->loadPowersDB();
                $data = $power->withRandomType()
                    ->withRandomFlavor()
                    ->withRandomTwist()
                    ->getPowerData();
                $args = array_merge($data);

                return $container->get('renderer')->render($response, 'BigImages.phtml', $args);
            });

            $app->get('/type', function (Request $request, Response $response) use ($container) {
                $container->get('logger')->info('/a/roll/type requested');
                $power = new Power($container);
                $power->loadPowersDB();
                $data = $power->withRandomType()
                              ->getPowerData();
                $args = array_merge($data);
                $out = $container->get('renderer')->render($response, 'OnlyType.phtml', $args);
                $container->get('logger')->info($out->getBody());
                return $out;
            });

            $app->get('/flavor', function (Request $request, Response $response) use ($container) {
                $power = new Power($container);
                $power->loadPowersDB();
                $data = $power->withRandomFlavor()
                    ->getPowerData();
                $args = array_merge($data);

                return $container->get('renderer')->render($response, 'OnlyFlavor.phtml', $args);
            });

            $app->get('/twist', function (Request $request, Response $response) use ($container) {
                $power = new Power($container);
                $power->loadPowersDB();
                $data = $power->withRandomTwist()
                    ->getPowerData();
                $args = array_merge($data);

                return $container->get('renderer')->render($response, 'OnlyTwist.phtml', $args);
            });
        });

        $app->get('/load/{type_}/{flavor_}/{twist_}', function (Request $request, Response $response, array $args) use ($container) {
            $power = new Power($container);
            $power->loadPowersDB();
            $data = $power->withType($args['type_'])
                ->withFlavor($args['flavor_'])
                ->withTwist($args['twist_'])
                ->getPowerData();
            $args = array_merge($data);

            return $container->get('renderer')->render($response, 'BigImages.phtml', $args);
        });
    });
};
