<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE2 ESCREVER</title>
</head>
<body>
    <?php
    
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if($num1 > $num2){
            echo "O primeiro número é maior que o segundo", "<br>";
            echo "Primeiro número: ", $num1, "<br>";
            echo "Segundo número: ", $num2, "<br>";
        }
        else{
            echo "O segundo número é maior que o primeiro", "<br>";
            echo "Primeiro número: ", $num1, "<br>";
            echo "Segundo número: ", $num2, "<br>";
        }
    ?>
</body>
</html>