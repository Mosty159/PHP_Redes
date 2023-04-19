<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE 4</title>
</head>
<body>
    <?php

            date_default_timezone_set("Portugal");

            if(isset($_COOKIE['visitas'])) {
                $visitas = $_COOKIE['visitas'] + 1;
            }
            else{
                $visitas = 1;
            }

            setcookie("visitas", $visitas, time() + 3600 * 3600);


            echo "<h3>BEM VINDO ÀS COOKIES!!!<br></h3>";

    

            echo '<img src="cookie.jpg" alt="Cookie" width="460" height="345">';
  
            echo '<Form action = "' , $_SERVER['PHP_SELF'],'" method="POST">';
                    echo '<input type="submit" name = "Reiniciar" value = "Reiniciar">';
                    echo '<input type="submit" name = "Continuar" value = "Continuar">';
            echo '</Form>';

            if(isset($_POST['Reiniciar'])){
                setcookie("visitas", "" , time() - 3600 * 3600);
                setcookie("data", "", time() - 3600 * 3600);
                $visitas = 1;
            }
    
            if($visitas == 1){
                echo "Está é a ", $visitas, "ª visita";
            }
            else{
                echo "Esta é a sua ", $visitas,  "ª visita. O último acesso foi em ", $_COOKIE['data'];
            }

            setcookie("data", date("d/m/y - H:i:s"));
    ?>
</body>
</html>