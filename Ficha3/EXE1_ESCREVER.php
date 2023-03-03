<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>EXE1 ESCREVER</title>
</head>
<body>
    <?php
    
        $nome = $_POST['Nome'];
        $idade = $_POST['idade'];
        $carro = $_POST['carro'];

        if($idade > 100){
            echo "A idade não é valida";
        }
        elseif($idade => 18){
            echo "O meu nome é ", $nome, "sou maior de idade e já posso conduzir carros da marca", $carro;
        }
        else{
            echo "“O meu nome é ", $nome, "menor de idade e não posso conduzir carros da marca", $carro;
        }

    ?>
</body>
</html>