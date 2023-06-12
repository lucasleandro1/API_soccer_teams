<?php
require __DIR__ . '/vendor/autoload.php';

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'Time.php';
require_once 'TImeDAO.php';


$app = AppFactory::create();

$app->addBodyParsingMiddleware(); // <<<---- here
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->get('/times', function (Request $request, Response $response, array $args) {
    $TimeDAO = new TimeDAO();
    $Time = $TimeDAO->read();
    $response->getBody()->write(json_encode($Time));
    return $response->withHeader('Content-type', 'application/json');
});

// $app->post('/times', function (Request $request, Response $response, array $args) {

//     $data = $request->getParsedBody();
//     $Time = new Time($data['nome'],$data['ano'],$data['libertadores'],$data['brasileirao'],$data['estadual'],$data['copadobrasil']);
//     $TImeDAO = new TImeDAO();
//     $TImeDAO->create($Time);
//     //$response->getBody()->write($_data);
//     return  $response->withStatus(201);

// });

$app->put('/times/{id}', function (Request $request, Response $response, array $args) {

    $id = $args['id'];
    $data = $request->getParsedBody();
    $Time = new Time($data['nome'],$data['ano'],$data['libertadores'],$data['brasileirao'],$data['estadual'],$data['copadobrasil']);
    $Time->setId($id);
    $TimeDAO = new TimeDAO();
    $TimeDAO->update($Time);
    //$response->getBody()->write($_data);
    return  $response->withStatus(200);
});

$app->delete('/times/{id}', function (Request $request, Response $response, array $args) {

    $id = $args['id'];
    $TimeDAO = new TImeDAO();
    $TimeDAO->delete($id);
    return  $response->withStatus(200);
});


$app->run();
?>