<?php
include("conecta.php");
if(isset($_POST["listar"]) )
 {
     $comando = $pdo->prepare("SELECT * FROM cadastro");
     $resultado = $comando->execute()
     while ($linhas = $comando->fetch() )
     {
         $n = $linhas["nome_cliente"]; // Nome da coluna XAMPP
         $c = $linhas["cpf_cliente"]; // Nome da coluna XAMPP
         $e = $linhas["email_cliente"]; // Nome da coluna XAMPP
         $cel = $linhas["celular_cliente"]; // Nome da coluna XAMPP
         $a = $linhas["a"]; // Nome da coluna XAMPP
         echo("Nome: $n Cpf: $c Email: $e Celular: $cel Admim: $a<br>");
     }
 }
?>