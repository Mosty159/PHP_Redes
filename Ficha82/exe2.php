<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSÕES</title>
</head>
<body>
    <?php
        session_start();
    ?>

    <?php
         if(isset($_SESSION['nvisitas'])) {
            $_SESSION['nvisitas']++;
        }
        else{
            $_SESSION['nvisitas'] = 1;
        }


        if($_SESSION['nvisitas'] == 1){
            echo "Bem vindo, Está é a ", $_SESSION['nvisitas'], "ª vez que visita este site";
        }
        else{
            echo "Bem vindo de novo ao site! Esta é a sua ", $_SESSION['nvisitas'],  "ª visita <br>";
            echo "Último acesso em ", $_SESSION['data'], " as ", $_SESSION['tempo'];
        }

        $_SESSION['data'] = date("d-m-y");
        $_SESSION['tempo'] = date("H:m:s");
    ?>
</body>
</html>