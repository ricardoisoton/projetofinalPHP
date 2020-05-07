<?php
include './class_os.php';
session_start();

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";

$numos = $_POST["numos"];
$dtabert = $_POST["dtabert"];
$trocaequip = $_POST["trocaequip"];
$dttroca = $_POST["dttroca"];

/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO ricardo_os(dtsbertura, trocaequipamento, datatroca) VALUES ('".$dtabert."', '".$trocaequip."', '".$dttroca."')";

if ($conn->query($sql) === TRUE) { //aqui executa a o comando
  echo "Dados salvo com sucesso";
} else {
  echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();

$fp = fopen("os.txt", "a");
$escreve = fwrite($fp, " ".$numos." Quantidade ".$qtd." na id ".$id);      
fclose($fp);

$os = new Os();
$os -> setDtabert($dtabert);
$os -> setTrocaequip($trocaequip);
$os -> setDttroca($dttroca);

echo " ".$numos. " ".$dtabert." ".$trocaequip." ".$dttroca;
?>