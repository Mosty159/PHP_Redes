<?php session_start(); //Inicia a sessão ?> 
<html>
    <head><title>SESSÕES - Página 1 </title></head>
    <body>
        <?php
                //Aqui ta a declarar a variavel e a fazer a variavel da sessão fique com o mesmo valor da variavel var_sessao
                $var_sessao = "Olá programadores de PHP!!!";
                $_SESSION['var_sessao'] = $var_sessao;
        ?>
        <!--Vai para o exe1b-->
        <h1 align = "center">SESSÕES e VARIÁVEIS DE SESSÃO</h1> <br><br>
        <a href = "exe1b.php">Ir para a página 2 </a>
</html>