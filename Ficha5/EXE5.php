<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE5</title>
</head>
<body>

    <table border="2" bordercolor="black" align="center" width="10%">
    <?php

        $e = 0;
        $a = 0;
        $i = 0;
        $turma = array(
                        'Nome' => array('Ana' => 'Ana', 'Bruna' => 'Bruna', 'Catarina' => 'Catarina', 'Matilde' =>'Matilde' , 'Bianca' => 'Bianca', 'Maia' => 'Maia'),
                        'Idade' => array('Ana' => 21, 'Bruna' => 15, 'Catarina' => 18 , 'Matilde' => 17, 'Bianca' => 16, 'Maia' => 20),
                        'Morada' => array('Ana' => 'Tavira', 'Bruna' => 'Cabanas', 'Catarina' => 'Cacela' , 'Matilde' => 'Tavira', 'Bianca' => 'Fuseta', 'Maia' => 'Olhão') );


            foreach($turma as $e){
                echo "<tr>";
                echo "<td align = \center\>", $e, "</td>";
                    foreach($turma as $a => $i){
                    
                        echo "<td align = \center\>", $i, "</td>";
                        
                    }
                echo "</tr>";  
            }

            echo "Alunos que são menores de idade: ";
            foreach($turma['Nome'] as $e => $i){
                if($turma['Idade'][$e] < 18){
                    echo $turma['Nome'][$e], " - ", $turma['Idade'][$e], " anos <br>";
                }
            }

            echo '<Form action = "' , $_SERVER['PHP_SELF'],'" method="POST">';
                echo "<input type="text" name="nome" required> <br> <br>";
                    echo "<input type="submit" value = "Procurar">";
            echo '</Form>';
    ?>
</body>
</html>