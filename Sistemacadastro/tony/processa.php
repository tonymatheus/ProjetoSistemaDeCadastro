<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$telefone =$_POST['telefone'];
$email =$_POST['email'];
$endereco =$_POST['endereco'];
$rg =$_POST['rg'];
$profissao =$_POST['profissao'];


$sql = "INSERT INTO usuarios(nome,telefone,email,endereco,rg,profissao) values('$nome','$telefone','$email','$endereco','$rg','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);



mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema De Cadastro</title>
        <link rel="stylesheet" href="_CSS/estilo.css"> 
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consulta.php"><li>Consultas</li></a>

                </ul>
            
            
            </nav>
            <section>
                <h1>Confirmação De Cadastro</h1>
                <hr><br><br>
            
                <?php
                
                if($linhas == 1){
                    print "Cadastro Efetuado Com Sucesso";
                }else{
                    print "Cadastro Não Efetuado.<br>Já Existe  um  Cadastro com Esse Email!";
                }
                
                
                
                ?>
                
            </section>
        </div>
    </body>
</html>