<?php
class Cadastro{
    private $id;
    private $nome;
    private $qtd;
    private $descricao;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getQtd(){
        return $this->qtd;
    }
    public function setQtd($qtd){
        $this->qtd = $qtd;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    } 
}
?>