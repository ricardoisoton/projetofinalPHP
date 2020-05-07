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
    public function setIdforn(){
        return $this->idforn;
    }
    public function getNomeforn(){
        return $this->contforn;
    }
    public function setNomeforn(){
        return $this->contforn;
    }
    public function getContforn(){
        return $this->contforn;
    }
    public function setContforn(){
        return $this->contforn;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setValor(){
        return $this->valor;  
    }
    public function getQtdcompra(){
        return $this->qtdcompra;
    }
    public function setQtdcompra(){
        return $this->qtdcompra;
    }
    public function getDtcompra(){
        return $this->dtcompra;
    }
    public function setDtcompra(){
        return $this->dtcompra;
    }
}

 ?>