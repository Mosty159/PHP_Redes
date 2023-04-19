<?php
        session_start();
?>

<?php
        $_SESSION['cor_letra'] = $_POST['cor_letra'];
        $_SESSION['tamanho_letra'] = $_POST['tamanho_letra'];
        $_SESSION['tipo_letra'] = $_POST['tipo_letra'];
        $_SESSION['nome'] = $_POST['nome'];
        
        
        if(!empty($_SESSION['nome'])){
            echo '<p align = "center"; style = "color:', $_SESSION['cor_letra'],'; font-family:', $_SESSION['tipo_letra'],'; font-size:', $_SESSION['tamanho_letra'],'px;">' ,$_SESSION['nome'], '</p>';
        }
        else{
            $erro = "ERRO";
            echo '<p align = "center"; style = "color:', $_SESSION['cor_letra'],'; font-family:', $_SESSION['tipo_letra'],'; font-size:', $_SESSION['tamanho_letra'],'px;">', $erro, '</p>';
        }
?>

    <div align = "center">
            <Form action = "exe4_ler.php" method="POST">
                    <input type="submit" value = "Voltar">
            </Form>
    </div>