<?php
include("conecta.php");


// Se clicou no botão INSERIR:
if(isset($_POST["comprar"]) )
{
    $comando = $pdo->prepare("INSERT INTO cadastro VALUE('$nome', '$cpf', '$email', '$celular', '$senha_cliente','')");
    $resultado = $comando->execute();
    header("Location: Cadastro.html");
    header("Location: index.html"); exit;
}
?>