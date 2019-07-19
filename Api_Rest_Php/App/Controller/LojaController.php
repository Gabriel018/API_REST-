<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\Loja\LojaDao;
use App\Model\LojaModel;


final class LojaController
{

    public function getcliente(Request $request, Response $response, array $ars) 
    {
        $lojaDao = new LojaDao();
        $loja = $lojaDao->getAllLoja();
        $response = $response->withJson($loja);

         return $response;
    }

    public function insertcliente(Request $request, Response $response, array $ars) 
    {
         $data = $request->getParsedBody();

        $lojaDao = new LojaDao();
        $loja = new LojaModel();
        $loja->setNome($data['nome'])
             ->setSobrenome($data['sobrenome'])
             ->setidade($data['idade']);
               
        $lojaDao->insertcliente($loja);
          
             $response = $response->withJson([
                 "message" => 'Dados inseridos com sucesso'
             ]);

        return $response;

    }
    public function updatecliente(Request $request, Response $response, array $ars) 
    {
        return $response;

    }
    public function deletecliente(Request $request, Response $response, array $ars) 
    {

        return $response;
        
    }
} 

?>