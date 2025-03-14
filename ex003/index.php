<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 

        // tipos primitivos escalares: int, float(double), String, boolean
        // 0x = hexadecimal, 0b = binario, 0 = octal
        $numero = 0x1A;
        echo "O valor da variável é $numero <br>";

        
        // mostrar o tipo primitivo
        $variavel = 45.2;
        var_dump($variavel);
        echo "<BR>";

        // Potencias são float
        // 3e2 = 3 x 10²
        $numero2 = 3e2;
        var_dump($numero2);
        echo "<BR>";

        // Coerção (conversão) de tipos primitvos
        $numero3 = (float) "950";
        var_dump($numero3);
        echo "<BR>";

        // tipos booleanos
        $casado = true;
        var_dump($casado);
        echo "<BR>";
        echo "Fulano é casado: $casado";
        echo "<BR>";
        
        // caso o boolean seja false o echo será vazio
        $casado = false;
        var_dump($casado);
        echo "<BR>";
        echo "Fulano é casado: $casado";
        echo "<BR>";

        // tipos primitivos compostos

        // arrays
        // As posições podem ser de tipos variados
        $vetor = [1.1, "Maria", 5, 2];
        var_dump($vetor);
        echo "<BR>";


        // object
        class Paciente{
            private string $nome;
            function __construct($nome){
                $this->nome = $nome;
            }
        }

        $p = new Paciente("teste");
        var_dump($p)

        ?>
    
</body>
</html>