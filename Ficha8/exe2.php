<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE 2</title>
</head>
<body>
    <?php

            if(isset($_COOKIE['nvisitas'])) {
                $nvisitas = $_COOKIE['nvisitas'] + 1;
            }
            else{
                $nvisitas = 1;
            }

            setcookie("nvisitas", $nvisitas, time() + 3600 * 3600);

            if($nvisitas == 1){
                echo "Bem vindo, Está é a ", $nvisitas, "ª vez que visita este site";
            }
            else{
                echo "Bem vindo de novo ao site! Esta é a sua ", $nvisitas,  "ª visita";
            }
    ?>
</body>
</html>