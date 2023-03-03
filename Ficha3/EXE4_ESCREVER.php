<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE4 ESCREVER</title>
</head>
<body>
    <?php
    
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operador = $_POST['operador'];

        if($operador == '+'){
            echo "$num1 + $num2 = ", $num1 + $num2;
        }
        elseif($operador == '-'){
            echo "$num1 - $num2 = ", $num1 - $num2;
        }
        elseif($operador == '/'){
            echo "$num1 / $num2 = ", $num1 / $num2;
        }
        elseif($operador == '*'){
            echo "$num1 * $num2 = ", $num1 * $num2;
        }
    ?>
    <Form action = "EXE4_LER.html" method="POST">   
        <input type="submit" value = "Continuar">
    </Form>

</body>
</html>