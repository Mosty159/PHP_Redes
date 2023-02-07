<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5.2 - ex5</title>
</head>
<body>

    <Form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Primeiro nº: <input type="text" name="x"> <br>
        Segundo nº: <input type="text" name="z"> <br>
                    <input type="submit" value = "Calcular">
    </Form>

    <?php

        $x = $_POST['x'];
        $z = $_POST['z'];
        $quo = $z / $x;
        $resto = $z % $x;


        echo "<pre>", "O quociente de ", $z, " a dividir por ", $x, " é ", $quo;
        echo "<br>","O resto da divisão inteira de ", $z, " por ", $x, " é ", $resto, "</pre>";

    ?>
</body>
</html>