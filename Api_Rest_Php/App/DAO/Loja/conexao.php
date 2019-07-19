<?php

namespace App\DAO\Loja;

abstract class  Conexao
{        
               
            protected $pdo;

    public function __construct()
    {
            $host = getenv('LOJA_MYSQL_HOST');
            $port = getenv('LOJa_MYSLQ_PORT');
            $user = getenv('LOJA_MYSQL_USER');
            $pass = getenv('LOJA_MYSQL_PASSWORD');
            $dbname = getenv('LOJA_MYSQL_DBNAME');


            $dns= "mysql:host={$host};dbname={$dbname};port={$port}";

            $this->pdo = new \PDO($dns, $user, $pass);
            $this->pdo->setAttribute(
                  \PDO::ATTR_ERRMODE,
                  \PDO::ERRMODE_EXCEPTION 
            );
                
    }
    
}
?>