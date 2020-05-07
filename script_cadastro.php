<?php
include './class_cadastro.php';
session_start();

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";

$id = $_POST["id"];
$nome = $_POST["nome"];
$qtd = $_POST["qtd"];
$descricao = $_POST["descricao"];

/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO ricardo_equipamento(nome, quantidade, descricao) VALUES ('".$nome."', '".$qtd."', '".$descricao."')";

if ($conn->query($sql) === TRUE) { //aqui executa a o comando
  echo "Dados salvo com sucesso";
} else {
  echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();


$fp = fopen("cadastro.txt", "a");
$escreve = fwrite($fp, "Item ".$nome." Quantidade ".$qtd." e descricao ".$descricao);
fclose($fp);

$cadastro = new class_cadastro;

$cadastro -> setId($nome);
$cadastro -> setNome($qtd);
$cadastro -> setQtd($descricao);

echo "Adicionado ".$qtd. " unidades do equipamento ".$nome." com com a id ".$id;
?>