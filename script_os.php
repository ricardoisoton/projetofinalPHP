<?php

$numos = $_POST["numos"];
$dtabert = $_POST["dtabert"];
$trocaequip = $_POST["trocaequip"];
$dttroca = $_POST["dttroca"];



$fp = fopen("os.txt", "a");

$escreve = fwrite($fp, " ".$numos." Quantidade ".$qtd." na id ".$id);
        
fclose($fp);

echo " ".$numos. " ".$dtabert." ".$trocaequip." ".$dttroca;
?>