<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE3 ESCREVER</title>
</head>
<body>
    <?php
    
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        if($num1 > $num2 and $num1 > $num3){
            echo "O primeiro número é maior que o segundo e o terceiro", "<br>";
            echo "Primeiro número: ", $num1, "<br>";
            echo "Segundo número: ", $num2, "<br>";
            echo "Terceiro número: ", $num3, "<br>";
        }
        elseif($num2 > $num1 and $num2 > $num3){
            echo "O segundo número é maior que o primeiro e o terceiro", "<br>";
            echo "Primeiro número: ", $num1, "<br>";
            echo "Segundo número: ", $num2, "<br>";
            echo "Terceiro número: ", $num3, "<br>";
        }
        elseif($num3 > $num1 and $num3 > $num1){
            echo "O terceiro número é maior que o primeiro e o segundo", "<br>";
            echo "Primeiro número: ", $num1, "<br>";
            echo "Segundo número: ", $num2, "<br>";
            echo "Terceiro número: ", $num3, "<br>";
        }
    ?>
</body>
</html>