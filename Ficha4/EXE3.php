<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE3</title>
</head>
<body>
    <table border="2" bordercolor="red" align="center" width="10%">
        <?php
            if (empty($_POST['num1']) && is_numeric($_POST['num1'])) {
                 
            $num1 = $_POST['num1'];
            $i = 0;

            do{
                echo "<tr>";
                echo "<td align = \center\>", $i + 1, "</td>";
                echo "<td align = \center\>", $num1 + ($i + 1), "</td>";
                echo "</tr>";
                $i++;
            }while($i <= 10)
        } else{
            echo "O valor não é um número"
        }
        ?>
    </table>
    
    <div align="center">
        <p><Form action = "EXE3.html" method="POST">   
            <input type="submit" value = "Continuar" algin="center">
        </Form></p>
    </div>
</body>
</html>