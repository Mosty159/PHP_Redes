<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Desafio 5.2 - ex6</title>
</head>
<body>
    <Form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Primeiro nº: <input type="text" name="S_iva"> <br>
                    <input type="submit" value = "Calcular">
    </Form>

    <?php
    
            $S_iva = $_POST['S_iva'];
            $iva = $S_iva * 0.23;
            $total = $S_iva + $iva;

            echo "<pre>", "Valor sem IVA = ", $S_iva, "€", "<br>";
            echo "IVA = ", $iva , "€", "<br>";
            echo "Valor final da reparação (Valor sem IVA + IVA) = ", $total, "€";

    ?>
</body>
</html>