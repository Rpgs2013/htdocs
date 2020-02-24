<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

require('./db/db_config.php');
require('./models/jugadorModel.php');

return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->get('/jugadores', function(Request $request, Response $response){

        $jugador = new jugadorModel();
        $jugadores = $jugador->getJugadores();
        $jugadores = json_encode($jugadores);

        $response->getBody()->write($jugadores);
        return $response;
    });

    $app->get('/jugadores/{id}', function(Request $request, Response $response){

        $id = $request->getAttribute('id');

        $jugador = new jugadorModel();
        $jugadores = $jugador->getJugador($id);
        $jugadores = json_encode($jugadores);

        $response->getBody()->write($jugadores);

        return $response;
    });

};
