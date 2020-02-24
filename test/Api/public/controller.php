<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    header("Access-Control-Allow-Origin: *");
    require_once("msqli_connect/dbConnectNBA.php");

    require __DIR__ . '/../vendor/autoload.php';

    $app = AppFactory::create();

    $app->get('/hello', function (Request $request, Response $response) {
        $response->getBody()->write("Hello");
        return $response;
    });

    $app->get('/jugadores', function (Request $request, Response $response) {
        $response->getBody()->write("Hello");
        

        return $response;
    });

    $app->run();
 ?>