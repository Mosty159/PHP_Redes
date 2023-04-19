<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>SESSÕES - Página 2 </title>
</head>
<body>
    <?php
            //Inicia a sessão
            session_start();
            header("Content - Type: text/html; charset = ISO-8859-1", true);
            date_default_timezone_set("Portugal");
    ?>

    <h1 align = "center">SESSÕES e VARIÁVEIS DE SESSÃO</h1>

    <?php
        //Verifica se a $_SESSION['var_sessao'] ta declarada
            if(isset($_SESSION['var_sessao']))
                echo "<i><b>". $_SESSION['var_sessao']. "</i></b><br>";
            else
                echo "ERRO!!! Não existe sessão iniciada!!!<br>";
    ?>
    <!--Opção de voltar para o exe1a ou permanecer no exe1b-->
    <br><a herf = "exe1a.php">Voltar para a página 1 </a><br>
    <br><a herf = "exe1b.php">Manter na página 2 </a><br>

    <?php
            //Tira o valor da variavel da sessão e destroi a sessão
            unset($_SESSION['var_sessao']);
            session_destroy();
    ?>
</body>
</html>