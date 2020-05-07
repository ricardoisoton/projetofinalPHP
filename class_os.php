<?php
class Os{
    private $numos;
    private $dtabert;
    private $trocaequip;
    private $dttroca;
    
    public function getNumos(){
        return $this->numos;
    }
    public function setNumos($numos){
        $this->numos = $numos;
    }
    public function getDtabert(){
        return $this->dtabert;
    }
    public function setDtabert($dtabert){
        $this->dtabert = $dtabert;
    }
    public function getTrocaequip(){
        return $this->trocaequip;
    }
    public function setTrocaequip($trocaequip){
        $this->trocaequip = $trocaequip;
    }
    public function getDttroca(){
        return $this->dttroca;
    }
    public function setDttroca($dttroca){
        $this->dttroca = $dttroca;  
    }
}
?>