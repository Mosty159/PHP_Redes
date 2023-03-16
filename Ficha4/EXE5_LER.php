<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE5</title>
</head>
<body>
    <Form action = "EXE5_ESCREVER.php" method="POST">

    <?php
        

        
        $cor_p = array("azul", "vermelho", "verde", "cinzento", "preto");
        $cor_i = array("blue", "red", "green", "silver", "black");

        echo "Escolhe o nº de linha:>";
        echo "<input type="text" name="n_linha" required> <br> <br>"

        echo 'Mês:';
        echo '<input type="text" name="n_coluna" required> <br> <br>'


        echo 'Cor: <select name = "cor">';
        for($a = 0; $a < count($cor_p); $a++){
            echo "option value= "$cor_i[$a]"> $cor_p[$a] </option>";
        }    
        echo "</select> <br> <br>"

        echo "<input type="submit" value = "Desenhar">"

    ?>

    </Form>
</body>
</html>