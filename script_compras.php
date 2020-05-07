<?php

$idforn = $_POST["idforn"];
$nomeforn = $_POST["nomeforn"];
$contforn = $_POST["contforn"];
$valor = $_POST["valor"];
$qtdcompra = $_POST["qtdcompra"];
$dtcompra = $_POST["dtcompra"];

$fp = fopen("compras.txt", "a");

$escreve = fwrite($fp, "Item ".$nome." Quantidade ".$qtd." na id ".$id);
        
fclose($fp);

echo "Compra realizada de ".$nomeforn." no valor de ".$valor." no dia ".$dtcompra;

?>