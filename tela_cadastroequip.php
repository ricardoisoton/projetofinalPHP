<?php
session_start();
echo "Uso da sessao" . $_SESSION["id"] . "Cookie" . $_COOKIE ["nome"];
?>

<html>
    <head>
        <title>Cadastro de Equipamentos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="script_cadastro.php" method="post">
        
        Nome: <input type=text  name=nome><br><br>
        Quantidade: <input type=text  name=qtd><br><br>
        Descricao: <textarea name=descricao cols=20 rows=6></textarea><br>
        <input type=submit value="OK"> </form>
        <a href="http://viajuntos.com.br/learn/iae/ricardo/projetofinal/index.html">Home</a><br>
    </body>
</html>
