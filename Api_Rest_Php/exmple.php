<?php
require_once "vendor/autoload.php";
//Interface do Psr
//Atribuido a Request
use Psr\Http\Message\ServerRequestInterface as Request;
//Atribuido a Responce
use Psr\Http\Message\ResponseInterface as Response;

//  $app = new \Slim\App();
// // //requisiçao http parametro do metodo GET
//  $app ->get('/Produtos',function(Request $request,Response $response, array $args) {
//  return $response->getBody()->write('Produtos do Banco de dados');
//  });
//  $app -> run();


// Configuraçao para identificar erros no Headers
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

     //Atributo Post/Put/Delete
$app = new \Slim\App();

$app ->post('/Produtos',function(Request $request,Response $response, array $args){
    $date = $request->getParsedBody();
    $nome = $date ['nome'] ;
    return $response->getBody()->write("Categoria {$nome} (POST)");

});


$app ->put('/Produtos',function(Request $request,Response $response, array $args){
    $date = $request->getParsedBody();
    $nome = $date ['nome'] ;
    return $response->getBody()->write("Categoria {$nome}(PUT)");

});

$app ->delete('/Produtos',function(Request $request,Response $response, array $args){
    $date = $request->getParsedBody();
    $nome = $date ['nome'] ;
    return $response->getBody()->write("Categoria {$nome}(DELETE)");

});
$app->run();


 ?>

