<?php
use function src\slimConfig;
use App\Controller\ProductController;
use App\Controller\LojaController;

$app = new \Slim\App(slimConfig());


//======================================

$app->get('/clientes', LojaController::class . ':getcliente');
$app->post('/clientes', LojaController::class . ':insertcliente');
$app->put('/clientes', LojaController::class . ':updatecliente');
$app->delete('/clientes', LojaController::class . ':deletecliente');


$app->run();

?>  