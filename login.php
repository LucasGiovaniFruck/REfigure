<?php
include("conecta.php");
$confirmar_email = $_POST["confirmar_email"];
$confirmar_senha = $_POST["confirmar_senha"];

if(isset($_POST["entrar"]) )
{
    $comando = $pdo->prepare("SELECT * FROM cadastro where email_cliente='$confirmar_email' and senha_cliente='$confirmar_senha'");
    $resultado = $comando->execute();
    $n = 0;
    $admin = "n";
    while ($linhas = $comando->fetch() )
    {
        $n = 1;
        $admin = $linhas["admin"];
    }
    if($n==0)
    {
        header("Location: index.html");
    }

    if($n==1)
    {
        if($admin == "s")
        {
            header("Location:adm_page.html");
        }
        else{
            header("Location:index.html");
        }
    }
}

?>