<?php
include("conecta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RE:Figure</title>
    <link rel="stylesheet" type="text/css" href="Compra.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
<div class="imagemprincipal"><img src="imagem/Urubu Preto e Branco.png" name="img" width="100%"></div>
<FORm action="teste.php" method="post"><button type="submit" class="comprar" name="comprar">Comprar</button></FORM>
        <?php

            // Se clicou no botão comprar:
            if(isset($_POST["comprar"]) )
            {
                $comando = $pdo->prepare("INSERT INTO produtos VALUE('Urubu Preto e Branco', '70.00', '1', '1')");
                $resultado = $comando->execute();
            }
            ?>
        </div>
</body>