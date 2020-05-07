<?php
session_start();
echo "Uso da sessao" . $_SESSION["id"] . "Cookie" . $_COOKIE ["nome"];
?>

<html>
    <head>
        <title>Compras</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="script_compras.php" method="post">
        Id Fornecedor: <input type=text  name=idforn><br><br>
        Nome Fornecedor: <input type=text  name=nomeforn><br><br>
        Contato: <input type=text  name=contforn><br><br>
        Valor: <input type=text  name=valor><br><br>
        Qtd Comprada: <input type=text  name=qtdcompra><br><br>
        Data da compra: <input type=text  name=dtcompra><br><br>
        <input type=submit value="OK"> </form>
                <a href="http://viajuntos.com.br/learn/iae/ricardo/projetofinal/index.html">Home</a><br>
    </body>
</html>