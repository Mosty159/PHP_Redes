<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE 4</title>
</head>
<body>
    <?php
        session_start();
    ?>

    <?php

            $cores = array('Vermelho' => 'Red', 'Azul' => 'Blue', 'Amarelo' => 'Yellow', 'Verde' => 'Green', 'Roxo' => 'Purple', 'Rosa' => 'Pink', 'Laranja' => 'Orange', 'Preto' => 'Black');
            $tamanho = array(15, 17, 19, 21, 23, 25);
            $tipo = array('Verdana', 'Arial', 'Century Gothic', 'Comic Sans Ms', 'Sans-serif', 'Cursive', 'Monospace', 'Fantasy');

            echo '<Form action = "exe4_mostrar.php" method="POST">';
                    echo 'Nome: <input type="text" name="nome"> <br><br>';
                    echo 'Cor da letra: <select name = "cor_letra">';
                        foreach($cores as $a => $b){
                            echo '<option value= "' , $b ,'">' , $a , '</option>';
                        }
                    echo "</select><br><br>";

                    echo 'Tamanho da letra: <select name = "tamanho_letra">';
                        foreach($tamanho as $c){
                            echo '<option value= "' , $c ,'">' , $c , '</option>';
                        }
                    echo "</select><br><br>";

                    echo 'Tipo de letra: <select name = "tipo_letra">';
                        foreach($tipo as $d){
                            echo '<option value= "' , $d ,'">' , $d , '</option>';
                        }
                    echo "</select><br><br>";

                    echo '<input type="submit" value = "Continuar">';
            echo '</Form>';


    ?>
</body>
</html>