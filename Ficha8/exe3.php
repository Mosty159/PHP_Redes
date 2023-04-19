<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE 3</title>
</head>
<body>
    <?php

            if(isset($_COOKIE['n_visitas'])) {
                $n_visitas = $_COOKIE['n_visitas'] + 1;
            }
            else{
                $n_visitas = 1;
            }

            setcookie("n_visitas", $n_visitas, time() + 3600 * 3600);


            if($n_visitas == 1){
                echo "Bem vindo, Está é a ", $n_visitas, "ª vez que visita este site";
            }
            else{
                echo "Bem vindo! Esta é a sua ", $n_visitas,  "ª visita. O último acesso foi em ", $_COOKIE['data'];
            }

            setcookie("data", date("d/m/y - h:i:s"));
    ?>
</body>
</html>