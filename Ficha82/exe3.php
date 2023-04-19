<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>SESSÕES</title>
</head>
<body>
    <?php
        session_start();
    ?>

    <?php

        echo "<h3>SESSÕES e VARIÁVEIS DE SESSÃO</h3><br>";


        if(!isset($_SESSION['n_visitas'])) {
            $_SESSION['n_visitas'] = 1;
        }
        else{
            $_SESSION['n_visitas']++;
        }

        echo '<Form action = "' , $_SERVER['PHP_SELF'],'" method="POST" align = "center" height = "600">';
            echo '<input type="submit" name = "Reiniciar" value = "Reiniciar">';
            echo '<input type="submit" name = "Continuar" value = "Continuar">';
        echo '</Form>';


        if(isset($_POST['Reiniciar'])){
            unset($_SESSION['data']);
            unset($_SESSION['tempo']);
            $_SESSION['n_visitas'] = 1;
        }


        if($_SESSION['n_visitas'] == 1){
            echo "Bem vindo, Está é a ", $_SESSION['n_visitas'], "ª vez que visita este site";
        }
        else{
            echo "Bem vindo de novo ao site! Esta é a sua ", $_SESSION['n_visitas'],  "ª visita <br>";
            echo "Último acesso em ", $_SESSION['data'], " as ", $_SESSION['tempo'];
        }

        $_SESSION['data'] = date("d-m-y");
        $_SESSION['tempo'] = date("H:m:s");

        


    ?>
</body>
</html>