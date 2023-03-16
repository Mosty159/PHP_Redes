<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE4</title>
</head>
<body>

    <Form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <?php
        if(!isset($_POST)){

        $dia = 1;
        $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
        $ano = 1980;

        echo 'Dia: <select name = "dia">';
        for($a = 0; $a < 31; $a++){
            echo 'option value= "' , $dia ,'">' , $dia , '</option>';
            $dia++;
        }
        echo "</select><br><br>";

        echo 'Mês: <select name = "meses">';
        for($a = 0; $a < 12; $a++){
            echo 'option value= "' , $meses[$a] , '">' , $meses[$a] , '</option>';
        }
        echo "</select> <br> <br>";


        echo 'Ano: <select name = "ano">';
        for($a = 1980; $a < 2023; $a++){
            echo 'option value= "' , $ano , '">' , $ano , '</option>';
            $ano++;
        }
        echo "</select> <br> <br>";

        echo '<input type="submit" value = "Mostrar">';


        }
        else{

            $dai = $_POST['$dia'];
            $mes = $_POST['$meses'];
            $anu = $_POST['$ano'];

            echo "Foi escolhido o dia $dai do mês de $mes do ano de $anu <br><br>";

            echo '<input type="submit" value="Voltar"';
        }
    ?>

    </Form>
</body>
</html>