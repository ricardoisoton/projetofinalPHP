<?php
session_start();
echo "Uso da sessao" . $_SESSION["id"] . "Cookie" . $_COOKIE ["nome"];
?>

<html>
    <head>
        <title>Ordem de Serviço</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="script_os.php" method="post">
        Número OS: <input type=text  name=numos><br><br>
        Data Abertura: <input type=text  name=dtabert><br><br>
        Equipamento a substituir: 
        <select name=trocaequip> 
            <option value=Placamae>Placa-mãe</option> 
            <option value=Memoria>Memória</option> 
            <option value=Processador>Processador</option>
            <option value=Monitor>Monitor</option>
        </select><br><br>
        Data da Troca: <input type=text  name=dttroca><br><br>
        <input type=submit value="OK"> </form>
                <a href="http://viajuntos.com.br/learn/iae/ricardo/projetofinal/index.html">Home</a><br>
    </body>
</html>