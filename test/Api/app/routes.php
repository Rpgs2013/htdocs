<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

require_once("../public/models/jugadoresModel.php");
require_once("../public/models/equipoModel.php");
require_once("../public/models/partidoModel.php");
//require_once("dbConnectNBA.php");

// Routes
// Grupo de rutas para el API
$app->group('/api', function () use ($app) {
    // Version group
    $app->group('/v1', function () use ($app) {
      $app->get('/empleados', 'obtenerEmpleados');
      $app->get('/empleado/{id}', 'obtenerEmpleado');
      $app->post('/crear', 'agregarEmpleado');
      $app->put('/actualizar/{id}', 'actualizarEmpleado');
      $app->delete('/eliminar/{id}', 'eliminarEmpleado');
    });
  });
