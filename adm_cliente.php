<?php
include("conecta.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>ERP-Re:Figure</title>
    <link rel="stylesheet" type="text/css" href="adm_cliente.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
    <nav class="menu-sidebar">
        <ul>
            <li>
                <a href="adm_page.html">
                    <i class="icon icon-home icon-text"></i>
                    <span class="menu-texto">
                        Página Inícial
                    </span>
                </a>
              
            </li>
            <li class="has-subnav">
                <a href="adm_produto.html">
                    <i class="icon icon-file-text icon-text"></i>
                    <span class="menu-texto">Produtos <ion-icon name="pricetags-outline"></ion-icon></span>
                </a>
                
            </li>
            
            <li class="has-subnav">
                <a href="adm_cliente.php">
                   <i class="icon icon-camera icon-text"></i>
                    <span class="menu-texto">Clientes <ion-icon name="people-circle-outline"></ion-icon></span>
                </a>
                
            </li>
        </ul>
        <ul class="logout">
            
            <li>
               <a href="index.html">
                    <i class="icon icon-plug icon-text"></i>
                    <span class="menu-texto"> Sair <ion-icon name="log-out-outline"></ion-icon></span>
                </a>
            </li>
        </ul>
    </nav>
      
    <div class="cabecalho">
        <div class="divlogo"><img src="imagem/RE FIGURE.png" class="logo"></div>
    </div>

    <div class="corpo">
        <h1>Base de clientes</h1>
            <table border="1"> 
        <tr> 
          <td>Nome</td> 
          <td>CPF</td> 
          <td>E-mail</td> 
          <td>Celular</td>  
          <td>Ações</td>  
        </tr> 
        <?php 
             $comando = $pdo->prepare("SELECT * FROM cadastro");
             $resultado = $comando->execute();

             while ($linhas = $comando->fetch() )
             {
                 $nome = $linhas["nome_cliente"]; // Nome da coluna XAMPP
                 $cpf = $linhas["cpf_cliente"]; // Nome da coluna XAMPP
                 $email = $linhas["email_cliente"]; // Nome da coluna XAMPP
                 $celular = $linhas["celular_cliente"]; // Nome da coluna XAMPP
                ?>
                <tr>
                <td><?php echo($nome); ?></td>
                <td><?php echo($cpf); ?></td>
                <td><?php echo($email); ?></td>
                <td><?php echo($celular); ?></td>
                <td> 
                    <a href=""><button class="editar">Editar</button></a> 
                    <a href=""><button class="excluir">Excluir</button></a> 
                </td>
                </tr>
            <?php } ?> 
      </table> 
    </body> 
        
    </div>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>   
<script  src="adm_cliente.js"></script>
</body>
</html>