<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use  App\DAO\Loja\LojaDao;


final class ProductController
{
   public function getPruduts(Request $request, Response $response, array $ars)
   {
    $response = $response->withJson([
        "message" => "Ola Mundo"
    ]);
      
    
    $lojaDao = new LojaDao();
    $lojaDao->teste();

    return $response;
   }

}


?>
