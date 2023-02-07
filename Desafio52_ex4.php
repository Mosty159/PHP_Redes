<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5.2 - ex4</title>
</head>
<body>
    <Form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        Primeiro nº: <input type="text" name="a"> <br>
        Segundo nº: <input type="text" name="b"> <br>
        Terceiro nº: <input type="text" name="c"> <br>
                    <input type="submit" value = "Calcular">
    </Form>

    <?php

        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $media = $a + $b + $c;
        $media = $media / 3;

        settype($media, "int");


        echo "A média de ", $a, " , " , $b, " e ", $c, " é ", $media;

?>
</body>
</html>