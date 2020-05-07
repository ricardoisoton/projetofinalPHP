<?php
include './class_compras.php';
session_start();

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";

$idforn = $_POST["idforn"];
$nomeforn = $_POST["nomeforn"];
$contforn = $_POST["contforn"];
$valor = $_POST["valor"];
$qtdcompra = $_POST["qtdcompra"];
$dtcompra = $_POST["dtcompra"];

/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO ricardo_compras(fornecedor, contatofornec, valor, quantidade, data) VALUES ('".$nomeforn."', '".$contforn."', '".$valor."', '".$qtdcompra."', '".$dtcompra."')";

if ($conn->query($sql) === TRUE) { //aqui executa a o comando
  echo "Dados salvo com sucesso";
} else {
  echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();

$fp = fopen("compras.txt", "a");
$escreve = fwrite($fp, "Item ".$nome." Quantidade ".$qtd." na id ".$id);   
fclose($fp);

$compras = new Compras();
$compras -> setNomeforn($nomeforn);
$compras -> setContforn($contforn);
$compras -> setValor($valor);
$compras -> setQtdcompra($qtdcompra);
$compras -> setDtcompra($dtcompra);

echo "Compra realizada de ".$nomeforn." no valor de ".$valor." no dia ".$dtcompra;

?>