<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Artiméticas</title>
</head>
<body>
    <?php 
    
    // Operadores Aritméticos
    // adição
    $soma  = 2+2;
    
    // subtração
    $subtracao = 4-2;

    // divisão
    $divisao = 4/2;

    // multiplicação
    $produto = 2*2;

    // pontenciação
    $potencia = 2**2;

    // modulo - resto da divisão
    $resto = 5%2;

    // Ordem de Precedencia
    // ()
    // **
    // *, / e %
    // + e -


    // Funções aritmeticas

    // Função abs: Retorna o valor absoluto de 1 número (sem o sinal negativo)

    $abs_value = abs(-10);

    // Função base_convert: converte a base número do número
    // base_convert([numero], [base_inicial], [base_final])

    $numero_hexadecimal = base_convert(254, 10, 16);

    // funções de arredondamento: ceil, floor e round

    // floor: arredonda para baixo
    $numero_arredondando_para_baixo = floor(2.9); //valor 2
    // ceil: arredonda para cima
    $numero_arredondando_para_cima = ceil(2.9); //valor 3
    // round: arredonda para o numero que está mais próximo
    $numero_arredondando = round(2.9); //valor 3

    // Função Hypot: calcula a hipotenusa de um triangula retângulo
    $hipotenusa = hypot(3,4); //valor 5
    
    
    // Função intdiv: realiza a divisão inteira
    $divisao_inteira = intdiv(5,2);//valor 2

    // Funções min e max: retornam os valores minimos e maximos respectivamente

    // função min: retonar o valor minimo
    $valor_minimo = min(1,2,6,7,8,9,0);

    // função max: retonar o valor maximo
    $valor_maximo = min(1,2,6,7,8,9,0);

    // função pi(): retorna o valor de pi

    $valor_de_pi = pi(); //também obtido pela constante nativa M_PI

    // função pow: calcula a potencia de um numero (perde precedencia em relação ao operador **)

    $resultado_pow = pow(5,2);

    // função sqrt: calcula raiz quadrada de 1 numero
    $raiz_quadrada = sqrt(81); //valor 9


    ?>
</body>
</html>