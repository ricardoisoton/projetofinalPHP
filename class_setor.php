<?php
class Setor{
    private $idsetor;
    private $nomesetor;
    private $respsetor;
    private $micro;
    
    public function getIdsetor(){
        return $this->idsetor;
    }
    public function setIdsetor($idsetor){
        $this->idsetor = $idsetor;
    }
    public function getNomesetor(){
        return $this->nomesetor;
    }
    public function setNomesetor($nomesetor){
        $this->nomesetor = $nomesetor;
    }
    public function getRespsetor(){
        return $this->respsetor;
    }
    public function setRespsetor($respsetor){
        $this->respsetor = $respsetor;
    }
    public function getMicro(){
        return $this->micro;
    }
    public function setMicro($micro){
        $this->micro = $micro;
    }
}
?>