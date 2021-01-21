<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\ComprasController;

$app = new App;

$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response) {
    // Use the PSR 7 $request object

    $comprasController = new ComprasController;

    $pagina = $comprasController->index();


    $response->getBody()->write($pagina);
    return $response;
});
$app->run();