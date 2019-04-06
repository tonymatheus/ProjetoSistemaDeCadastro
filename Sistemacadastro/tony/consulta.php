
<?php

include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);


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
                <h1>Consultas</h1>
                <hr><br><br>
                
                <fomr method="get" action="">
                    
                    Filtrar por Nome: <input type="text" name="filtro" class="campo" required  autofocus>
                    <input type="submit" value="Pesquisar" class="btn"><br>
                
                </fomr>
            
                <?php
                
               print "$registros Registros Encontrados";
                
                while($exibirRegistros = mysqli_fetch_array($consulta)){
                    
                    $codigo = $exibirRegistros[0];
                    $nome =$exibirRegistros[1];
                    $telefone = $exibirRegistros[2];
                    $email = $exibirRegistros[3];
                    $endereco = $exibirRegistros[4];
                    $rg = $exibirRegistros[5];
                    $profissao = $exibirRegistros[6];
                    
                    print "<article>";
                    
                    print"<strong>Código</strong>:$codigo<br>";
                    print"<strong>Nome:</strong>$nome<br>";
                    print"<strong>Telefone</strong>:<br>$telefone<br>";
                    print"<strong> Email: </strong><br>$email<br>";
                    print"<strong> Endereço: <br></strong>$endereco<br>";
                    print"<strong>RG:</strong><br>$rg<br>";
                    print"<strong>Profissão</strong>: $profissao" ;   
                    
                    print "</article>";
                    
                }
                
                mysqli_close($conexao);
                
                ?>
                
            </section>
        </div>
    </body>
</html>



