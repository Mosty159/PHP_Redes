<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE 4</title>
</head>
<body>
    <?php

            date_default_timezone_set("Portugal");

            if(isset($_COOKIE['n_visitas'])) {
                $n_visitas = $_COOKIE['n_visitas'] + 1;
            }
            else{
                $n_visitas = 1;
            }

            setcookie("n_visitas", $n_visitas, time() + 3600 * 3600);


            echo "<h3>BEM VINDO ÀS COOKIES!!!<br></h3>";

    

            echo '<img src="cookie.jpg" alt="Cookie" width="460" height="345">';
  
            echo '<Form action = "' , $_SERVER['PHP_SELF'],'" method="POST">';
                    echo '<input type="submit" name = "Reiniciar" value = "Reiniciar">';
                    echo '<input type="submit" name = "Continuar" value = "Continuar">';
            echo '</Form>';

            if(isset($_POST['Reiniciar'])){
                setcookie("n_visitas", "" , time() - 3600 * 3600);
                setcookie("data", "", time() - 3600 * 3600);
                $n_visitas = 1;
            }
    
            if($n_visitas == 1){
                echo "Está é a ", $n_visitas, "ª visita";
            }
            else{
                echo "Esta é a sua ", $n_visitas,  "ª visita. O último acesso foi em ", $_COOKIE['data'];
            }

            setcookie("data", date("d/m/y - H:i:s"));
    ?>
</body>
</html>