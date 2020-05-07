<?php

class Compras{
    private $idforn = 0;
    private $nomeforn = "";
    private $contforn = "";
    private $valor = 0;
    private $qtdcompra = "";
    private $dtcompra = "";
    
    public function getIdforn(){
        return $this->idforn;
    }
    public function setIdforn($idforn){
        $this->idforn = $idforn;
    }
    public function getNomeforn(){
        return $this->contforn;
    }
    public function setNomeforn($nomeforn){
        $this->contforn = $nomeforn;
    }
    public function getContforn(){
        return $this->contforn;
    }
    public function setContforn($contforn){
        $this->contforn = $contforn;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;  
    }
    public function getQtdcompra(){
        return $this->qtdcompra;
    }
    public function setQtdcompra($qtdcompra){
        $this->qtdcompra = $qtdcompra;
    }
    public function getDtcompra(){
        return $this->dtcompra;
    }
    public function setDtcompra($dtcompra){
        $this->dtcompra = $dtcompra;
    }
}

 ?>