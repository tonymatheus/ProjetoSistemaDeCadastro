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
                <h1>Cadastro De Usuários</h1>
                <hr><br><br>
            
                <form method="POST" action="processa.php">
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br><br>
                    
                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    Telefone<br>
                    <input type="text" name="telefone" class="campo" maxlength="20"><br>
                    Email<br>
                    <input type="email" name="email" class="campo" maxlength=" 50" required ><br>
                    Endereço<br>
                    <input type="text" name="endereco" class="campo" maxlength="180" required><br>
                    RG<br>
                    <input type="text" name="rg" class="campo" maxlength="30" required><br>
                    Profissão<br>
                    <input type="text" name="profissao" class="campo" maxlength="40" required>
                    
                </form>
            </section>
        </div>
    </body>
</html>