<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas em PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }
        header {
            background-color: #4b0082;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        section {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        h1 {
            margin: 0;
        }
        h2 {
            color: #4b0082;
            border-bottom: 2px solid #4b0082;
            padding-bottom: 5px;
        }
        h3 {
            color: #6a5acd;
        }
        .code-example {
            background-color: #f5f5f5;
            border-left: 4px solid #4b0082;
            padding: 10px 15px;
            margin: 10px 0;
            font-family: monospace;
            overflow-x: auto;
        }
        .result {
            background-color: #e9f7ef;
            padding: 8px;
            border-radius: 4px;
            display: inline-block;
            margin-left: 10px;
        }
        .note {
            background-color: #fff8dc;
            padding: 10px;
            border-left: 4px solid #ffd700;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Expressões Aritméticas em PHP</h1>
        <p>Guia completo de operadores e funções matemáticas</p>
    </header>

    <section>
        <h2>Operadores Aritméticos</h2>
        <table>
            <tr>
                <th>Operador</th>
                <th>Nome</th>
                <th>Exemplo</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Adição</td>
                <td><code>$soma = 2 + 2;</code></td>
                <td><span class="result">4</span></td>
            </tr>
            <tr>
                <td>-</td>
                <td>Subtração</td>
                <td><code>$subtracao = 4 - 2;</code></td>
                <td><span class="result">2</span></td>
            </tr>
            <tr>
                <td>*</td>
                <td>Multiplicação</td>
                <td><code>$produto = 2 * 2;</code></td>
                <td><span class="result">4</span></td>
            </tr>
            <tr>
                <td>/</td>
                <td>Divisão</td>
                <td><code>$divisao = 4 / 2;</code></td>
                <td><span class="result">2</span></td>
            </tr>
            <tr>
                <td>**</td>
                <td>Potenciação</td>
                <td><code>$potencia = 2 ** 2;</code></td>
                <td><span class="result">4</span></td>
            </tr>
            <tr>
                <td>%</td>
                <td>Módulo (resto da divisão)</td>
                <td><code>$resto = 5 % 2;</code></td>
                <td><span class="result">1</span></td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Ordem de Precedência</h2>
        <p>A ordem na qual as operações são executadas em uma expressão:</p>
        <ol>
            <li>Parênteses <code>()</code></li>
            <li>Potenciação <code>**</code></li>
            <li>Multiplicação <code>*</code>, Divisão <code>/</code> e Módulo <code>%</code></li>
            <li>Adição <code>+</code> e Subtração <code>-</code></li>
        </ol>
        
        <div class="note">
            <strong>Nota:</strong> Sempre use parênteses para deixar suas expressões mais claras e garantir a ordem correta das operações.
        </div>
        
        <div class="code-example">
            // Exemplo com ordem de precedência<br>
            $resultado = 2 + 3 * 4;   // Resultado: 14 (não 20)<br>
            $resultado = (2 + 3) * 4; // Resultado: 20
        </div>
    </section>

    <section>
        <h2>Funções Aritméticas</h2>

        <h3>Valor Absoluto</h3>
        <div class="code-example">
            // Função abs: Retorna o valor absoluto de um número (sem o sinal negativo)<br>
            $abs_value = abs(-10); <span class="result">// Resultado: 10</span>
        </div>

        <h3>Conversão de Base</h3>
        <div class="code-example">
            // Função base_convert: converte a base numérica do número<br>
            // base_convert([numero], [base_inicial], [base_final])<br>
            $numero_hexadecimal = base_convert(254, 10, 16); <span class="result">// Resultado: "fe"</span>
        </div>

        <h3>Funções de Arredondamento</h3>
        <div class="code-example">
            // floor: arredonda para baixo<br>
            $numero_arredondando_para_baixo = floor(2.9); <span class="result">// Resultado: 2</span><br>
            <br>
            // ceil: arredonda para cima<br>
            $numero_arredondando_para_cima = ceil(2.9); <span class="result">// Resultado: 3</span><br>
            <br>
            // round: arredonda para o número mais próximo<br>
            $numero_arredondando = round(2.9); <span class="result">// Resultado: 3</span>
        </div>

        <h3>Funções Geométricas</h3>
        <div class="code-example">
            // Função hypot: calcula a hipotenusa de um triângulo retângulo<br>
            $hipotenusa = hypot(3, 4); <span class="result">// Resultado: 5</span>
        </div>

        <h3>Divisão Inteira</h3>
        <div class="code-example">
            // Função intdiv: realiza a divisão inteira<br>
            $divisao_inteira = intdiv(5, 2); <span class="result">// Resultado: 2</span>
        </div>

        <h3>Valores Mínimos e Máximos</h3>
        <div class="code-example">
            // função min: retorna o valor mínimo<br>
            $valor_minimo = min(1, 2, 6, 7, 8, 9, 0); <span class="result">// Resultado: 0</span><br>
            <br>
            // função max: retorna o valor máximo<br>
            $valor_maximo = max(1, 2, 6, 7, 8, 9, 0); <span class="result">// Resultado: 9</span>
        </div>

        <h3>Constantes e Funções Matemáticas</h3>
        <div class="code-example">
            // função pi(): retorna o valor de pi<br>
            $valor_de_pi = pi(); <span class="result">// Resultado: 3.1415926535898</span><br>
            // também obtido pela constante nativa M_PI<br>
            <br>
            // função pow: calcula a potência de um número<br>
            $resultado_pow = pow(5, 2); <span class="result">// Resultado: 25</span><br>
            <br>
            // função sqrt: calcula raiz quadrada de um número<br>
            $raiz_quadrada = sqrt(81); <span class="result">// Resultado: 9</span>
        </div>
    </section>

    <section>
        <h2>Exemplos Práticos</h2>
        
        <h3>Cálculo da Área de um Círculo</h3>
        <div class="code-example">
            $raio = 5;<br>
            $area = pi() * pow($raio, 2);<br>
            echo "A área do círculo é: " . $area; <span class="result">// Resultado: A área do círculo é: 78.539816339745</span>
        </div>
        
        <h3>Verificando se um Número é Par ou Ímpar</h3>
        <div class="code-example">
            $numero = 7;<br>
            if ($numero % 2 == 0) {<br>
                echo "O número é par.";<br>
            } else {<br>
                echo "O número é ímpar.";<br>
            } <span class="result">// Resultado: O número é ímpar.</span>
        </div>
        
        <h3>Calculando a Média de Valores</h3>
        <div class="code-example">
            $valores = [12, 25, 18, 33, 7];<br>
            $soma = array_sum($valores);<br>
            $media = $soma / count($valores);<br>
            echo "A média é: " . $media; <span class="result">// Resultado: A média é: 19</span>
        </div>
    </section>

    <footer>
        <p>Guia de Expressões Aritméticas em PHP - Criado em <?php echo date('d/m/Y'); ?></p>
    </footer>

    <?php
    // Código PHP das anotações originais
    // Operadores Aritméticos
    $soma  = 2+2;
    $subtracao = 4-2;
    $divisao = 4/2;
    $produto = 2*2;
    $potencia = 2**2;
    $resto = 5%2;
    
    // Funções aritméticas
    $abs_value = abs(-10);
    $numero_hexadecimal = base_convert(254, 10, 16);
    $numero_arredondando_para_baixo = floor(2.9);
    $numero_arredondando_para_cima = ceil(2.9);
    $numero_arredondando = round(2.9);
    $hipotenusa = hypot(3,4);
    $divisao_inteira = intdiv(5,2);
    $valor_minimo = min(1,2,6,7,8,9,0);
    $valor_maximo = max(1,2,6,7,8,9,0);
    $valor_de_pi = pi();
    $resultado_pow = pow(5,2);
    $raiz_quadrada = sqrt(81);
    ?>
</body>
</html>