<?php
namespace App\Model;

final class LojaModel
{
   /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $nome;
     /**
     * @var string
     */
    private $idade;
    /**
     * @var string
     */
    private $sobrenome;
   


   public function getid(){

        return $this->id;
   }

   public function setid(int $id): LojaModel
    {
        $this->id = $id;
        return $this;
    }

   public function getNome()
   {
       return $this->nome;
   }

   public function setNome(string $nome){
    
      $this->nome = $nome;

      return $this;

   }

   //////////////////////////////////////////
   public function getidade()
   {
       return $this->idade;
       
   }

   public function setidade(string $idade){
    
     $this->idade = $idade;
     return $this;
   }
   ////////////////////////////////////////

   public function getSobrenome()
   {
       return $this->sobrenome;
       
   }

   public function setSobrenome(string $sobrenome){
    
            $this->sobrenome = $sobrenome;
            return $this;
   }    

}
?>