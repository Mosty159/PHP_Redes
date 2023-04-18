<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE 1 a</title>
</head>
<body>
    <?php
            if(isset($_COOKIE['cnt'])) { //Aqui o If serve para chequar se a variavel ta declarada
                $contador = $_COOKIE['cnt'] + 1; //A variavel contador fica com o mesmo valor do $_COOKIE['cnt'] + 1 
                setcookie("cnt", $contador, time() + 2592000); //Aqui ta a criar a cookie
            } else { //Aqui caso o $_COOKIE['cnt'] tenha algo vai fazer o seguinte
                $contador = 1; //Aqui ta a declarar o $contador
                setcookie("cnt", $contador, time() + 2592000); //Aqui ta a criar a cookie
            }
    ?>
</body>
</html>