<?php
include './class_os.php';

$numos = $_POST["numos"];
$dtabert = $_POST["dtabert"];
$trocaequip = $_POST["trocaequip"];
$dttroca = $_POST["dttroca"];

$fp = fopen("os.txt", "a");
$escreve = fwrite($fp, " ".$numos." Quantidade ".$qtd." na id ".$id);      
fclose($fp);

$os = new Os();
$os -> setDtabert($dtabert);
$os -> setTrocaequip($trocaequip);
$os -> setDttroca($dttroca);

echo " ".$numos. " ".$dtabert." ".$trocaequip." ".$dttroca;
?>