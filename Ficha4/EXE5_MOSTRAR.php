<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXE5</title>
</head>
<body>
    <?php
        $n_linhas = $_POST['n_linha'];
        $n_colunas = $_POST['n_coluna'];
        $core = $_POST['cor']

        if(is_numeric($n_linhas) and is_numeric($n_colunas)){
            if($n_linhas > 0 and $n_linhas <= 50 and $n_colunas > 0 and $n_colunas <= 50) 
            echo '<table border="2" bordercolor="'$cores'" align="center" width="10%">'
                for($a = 0; $a < $n_linhas; $a++){
                    echo '<tr>';
                
                    for($e = 0; $i < $n_colunas; $e++){
                        echo '<td> &nbsp; &nbsp; &nbsp; &nbsp; </td>'
                    }
                    echo '<tr>';
                }
                echo '</table';
            }     
    ?>

        <div align="center">
            <p><Form action = "EXE3.html" method="POST">   
                <input type="submit" value = "Voltar" >
            </Form></p>
        </div>
</body>
</html>