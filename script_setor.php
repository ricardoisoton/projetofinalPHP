<?php
include './class_setor.php';
session_start();

$idsetor = $_POST["idsetor"];
$nomesetor = $_POST["nomesetor"];
$respsetor = $_POST["respsetor"];
$micro = $_POST["micro"];

$setor = new Setor();

$setor -> setIdsetor($idsetor);
$setor -> setNomesetor($nomesetor);
$setor -> setRespsetor($respsetor);
$setor -> setMicro($micro);

echo "".$idsetor. " ".$nomesetor." ".$respsetor." ".$micro;
?>