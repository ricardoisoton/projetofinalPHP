<?php
include './class_setor.php';
session_start();

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";

$idsetor = $_POST["idsetor"];
$nomesetor = $_POST["nomesetor"];
$respsetor = $_POST["respsetor"];
$micro = $_POST["micro"];

/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO ricardo_setor(nome, responsavel, computador) VALUES ('".$nomesetor."', '".$respsetor."', '".$micro."')";

if ($conn->query($sql) === TRUE) { //aqui executa a o comando
  echo "Dados salvo com sucesso";
} else {
  echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();

$fp = fopen("setor.txt", "a");
$escreve = fwrite($fp, "Setor ".$nomesetor." Responsavel ".$respsetor." e computador ".$micro);
fclose($fp);

$setor = new Setor();
$setor -> setIdsetor($idsetor);
$setor -> setNomesetor($nomesetor);
$setor -> setRespsetor($respsetor);
$setor -> setMicro($micro);

echo "".$idsetor. " ".$nomesetor." ".$respsetor." ".$micro;
?>