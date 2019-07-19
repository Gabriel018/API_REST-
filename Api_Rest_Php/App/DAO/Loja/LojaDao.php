<?php
namespace App\DAO\Loja;

use App\Model\LojaModel;


class LojaDao extends Conexao{
    public function __construct()
    {
      parent::__construct();

    }   
    public function getAllLoja()
    {
        $loja = $this->pdo
        ->query('SELECT id,idade,nome,sobrenome FROM clientes;')
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $loja;
    }

       public function insertcliente(LojaModel $loja): void
       {
          $statement = $this->pdo    
            ->prepare('INSERT INTO clientes VALUES(
            null,
            :nome,
            :sobrenome,
            :idade
            );');

            $statement->execute([
                'nome'=> $loja->getNome(),
                'sobrenome'=> $loja->getSobrenome(),
                'idade'=> $loja->getidade()
            ]);

       }

}
        


?>