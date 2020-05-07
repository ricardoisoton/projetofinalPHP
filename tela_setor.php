<?php
session_start();
echo "Uso da sessao " . $_SESSION["id"] . "Cookie " . $_COOKIE ["nome"];
?>

<html>
    <head>
        <title>Setor</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="script_setor.php" method="post">
        Id Setor: <input type=text  name=idsetor><br><br>
        Setor: <input type=text  name=nomesetor><br><br>
        Responsavel Setor: <input type=text  name=respsetor><br><br>
        Micro: <input type=text  name=micro><br><br>
        <input type=submit value="OK"> </form>
                <a href="http://viajuntos.com.br/learn/iae/ricardo/projetofinal/index.html">Home</a><br>
    </body>
</html>