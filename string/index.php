<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php 
    
    $nome = "Gustavo";
    $sobrenome = "Guanabara";

    // exemplo com double quoted: "" - interpreta variaveis e codigo unicode
    // notação para exibir carecteres unicode: \u{codigo-unicode}
    echo "$nome $sobrenome \u{1f596}";
    

    echo "<br>";

    // exemplo com single quoted: '' - nao interpreta variáveis e codigos unicode
    echo '$nome $sobrenome \u{1f596}';

    echo "<br>";

    // não é possível interpolar (interpretar) constante dentro de "", pois as constantes não usam: $

    const ESTADO = "CE";

    // neste caso usa-se o '.', operador de concatenação
    echo "Moro no ". ESTADO;

    echo "<br>";
    
    echo "Moro no  ESTADO";

    echo "<br>";

    // Sequencia de escape no double quoted

    // \n quebra de linha
    echo "Quebra de linha \n nova linha";

    echo "<br>";

    // \t tabulação (tab)
    echo "Exemplo de tab: \t tab";

    echo "<br>";

    // \\ para exibir a barra invertida "\"
    echo "Essa é uma barra invertida: \\";

    echo "<br>";

    // \$ para mostrar o cifrão: $
    echo "Símbolo cifrão: \$";

    echo "<br>";

    // \u{} para exibir caractere unicode
    echo "Olá mundo \u{1F30E}";

    echo "<br>";

    // Strings heredoc
    $pais = "Brasil";
    $teste = 
    <<< QUALQUER
    Oi,
            tudo bem?
        meu país é o: $pais
    QUALQUER;

    echo $teste;

    echo "<br>";

    // Strings heredoc
    $teste2 = 
    <<< 'QUALQUER'
    Oi,
            tudo bem?
        meu país é o: $pais
    QUALQUER;

    echo $teste2;
    
    ?>
</body>
</html>