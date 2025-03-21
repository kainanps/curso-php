<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        
            // operador de coalecência nula: ?? 
            // utilizado para atribuir valor caso varíavel seja nula
            $nome =  $_GET['nome'] ?? "Nome Não informado";
            $sobrenome = $_GET['sobrenome'] ?? "Sobrenome Não informado";
        

            echo "<p>É um prazer te conhecer , <strong>$nome $sobrenome</strong>! Este é o meu site</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>
</body>
</html>