<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: #4527a0;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        
        h1 {
            margin: 0;
            font-size: 2.2em;
        }
        
        .content {
            background-color: white;
            padding: 25px;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        .section {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        
        .section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        
        h2 {
            color: #4527a0;
            margin-top: 0;
            font-size: 1.8em;
        }
        
        code {
            background-color: #f5f5f5;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: 'Courier New', Courier, monospace;
            color: #d63384;
        }
        
        .code-block {
            background-color: #282c34;
            color: #abb2bf;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: 'Courier New', Courier, monospace;
            position: relative;
            margin: 15px 0;
        }
        
        .code-block .comment {
            color: #98c379;
        }
        
        .code-block .variable {
            color: #e06c75;
        }
        
        .code-block .function {
            color: #61afef;
        }
        
        .code-block .string {
            color: #98c379;
        }
        
        .code-block .output {
            color: #e5c07b;
            border-top: 1px solid #555;
            margin-top: 10px;
            padding-top: 10px;
        }
        
        .code-block .keyword {
            color: #c678dd;
        }
        
        .output-block {
            background-color: #f8f9fa;
            padding: 10px;
            border-left: 4px solid #4527a0;
            margin: 15px 0;
        }
        
        .tipo-primitivo {
            display: inline-block;
            padding: 5px 10px;
            background-color: #7e57c2;
            color: white;
            border-radius: 15px;
            font-size: 0.9em;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        
        .nota {
            background-color: #fff8e1;
            padding: 10px 15px;
            border-left: 4px solid #ffc107;
            margin: 15px 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Tipos Primitivos em PHP</h1>
        </header>
        
        <div class="content">
            <div class="section">
                <h2>Tipos Primitivos Escalares</h2>
                <div class="tipo-primitivo">int</div>
                <div class="tipo-primitivo">float</div>
                <div class="tipo-primitivo">string</div>
                <div class="tipo-primitivo">boolean</div>
                
                <div class="nota">
                    <strong>Nota:</strong> PHP possui quatro tipos primitivos escalares principais.
                </div>
            </div>
            
            <div class="section">
                <h2>Inteiros (int)</h2>
                <p>Os inteiros são números sem casas decimais. Podem ser representados em diferentes bases:</p>
                <ul>
                    <li><code>0x</code> = hexadecimal</li>
                    <li><code>0b</code> = binário</li>
                    <li><code>0</code> = octal</li>
                </ul>
                
                <div class="code-block">
                    <span class="comment">// Exemplo de inteiro hexadecimal</span><br>
                    <span class="variable">$numero</span> = <span class="keyword">0x1A</span>;<br>
                    <span class="function">echo</span> <span class="string">"O valor da variável é $numero &lt;br&gt;"</span>;<br>
                    <span class="output">// Saída: O valor da variável é 26</span>
                </div>
            </div>
            
            <div class="section">
                <h2>Verificando Tipos com var_dump()</h2>
                <p>A função <code>var_dump()</code> é muito útil para descobrir o tipo e o valor de uma variável:</p>
                
                <div class="code-block">
                    <span class="variable">$variavel</span> = <span class="keyword">45.2</span>;<br>
                    <span class="function">var_dump</span>(<span class="variable">$variavel</span>);<br>
                    <span class="output">// Saída: float(45.2)</span>
                </div>
            </div>
            
            <div class="section">
                <h2>Números de Ponto Flutuante (float)</h2>
                <p>Floats são números com casas decimais ou em notação científica:</p>
                
                <div class="code-block">
                    <span class="comment">// Potências são float</span><br>
                    <span class="comment">// 3e2 = 3 x 10²</span><br>
                    <span class="variable">$numero2</span> = <span class="keyword">3e2</span>;<br>
                    <span class="function">var_dump</span>(<span class="variable">$numero2</span>);<br>
                    <span class="output">// Saída: float(300)</span>
                </div>
            </div>
            
            <div class="section">
                <h2>Coerção de Tipos</h2>
                <p>PHP permite a conversão explícita de tipos, também conhecida como type casting:</p>
                
                <div class="code-block">
                    <span class="comment">// Coerção (conversão) de tipos primitivos</span><br>
                    <span class="variable">$numero3</span> = (<span class="keyword">float</span>) <span class="string">"950"</span>;<br>
                    <span class="function">var_dump</span>(<span class="variable">$numero3</span>);<br>
                    <span class="output">// Saída: float(950)</span>
                </div>
            </div>
            
            <div class="section">
                <h2>Booleanos (boolean)</h2>
                <p>Booleanos representam valores de verdade: verdadeiro (true) ou falso (false):</p>
                
                <div class="code-block">
                    <span class="comment">// Tipos booleanos</span><br>
                    <span class="variable">$casado</span> = <span class="keyword">true</span>;<br>
                    <span class="function">var_dump</span>(<span class="variable">$casado</span>);<br>
                    <span class="function">echo</span> <span class="string">"&lt;BR&gt;"</span>;<br>
                    <span class="function">echo</span> <span class="string">"Fulano é casado: $casado"</span>;<br>
                    <span class="output">// Saída: bool(true)</span><br>
                    <span class="output">// Saída: Fulano é casado: 1</span>
                </div>
                
                <div class="nota">
                    <strong>Nota:</strong> Quando impresso, <code>true</code> é exibido como <code>1</code> e <code>false</code> não exibe nada.
                </div>
                
                <div class="code-block">
                    <span class="comment">// Caso o boolean seja false o echo será vazio</span><br>
                    <span class="variable">$casado</span> = <span class="keyword">false</span>;<br>
                    <span class="function">var_dump</span>(<span class="variable">$casado</span>);<br>
                    <span class="function">echo</span> <span class="string">"&lt;BR&gt;"</span>;<br>
                    <span class="function">echo</span> <span class="string">"Fulano é casado: $casado"</span>;<br>
                    <span class="output">// Saída: bool(false)</span><br>
                    <span class="output">// Saída: Fulano é casado: </span>
                </div>
            </div>
            
            <div class="section">
                <h2>Tipos Primitivos Compostos</h2>
                <div class="tipo-primitivo">array</div>
                <div class="tipo-primitivo">object</div>
                
                <h3>Arrays</h3>
                <p>Arrays são coleções de valores que podem ser de diferentes tipos:</p>
                
                <div class="code-block">
                    <span class="comment">// As posições podem ser de tipos variados</span><br>
                    <span class="variable">$vetor</span> = [<span class="keyword">1.1</span>, <span class="string">"Maria"</span>, <span class="keyword">5</span>, <span class="keyword">2</span>];<br>
                    <span class="function">var_dump</span>(<span class="variable">$vetor</span>);<br>
                    <span class="output">// Saída: array(4) { [0]=> float(1.1) [1]=> string(5) "Maria" [2]=> int(5) [3]=> int(2) }</span>
                </div>
                
                <h3>Objetos</h3>
                <p>Objetos são instâncias de classes definidas pelo usuário:</p>
                
                <div class="code-block">
                    <span class="comment">// Exemplo de uma classe e objeto</span><br>
                    <span class="keyword">class</span> <span class="function">Paciente</span> {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">private string</span> <span class="variable">$nome</span>;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">function</span> <span class="function">__construct</span>(<span class="variable">$nome</span>) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="variable">$this->nome</span> = <span class="variable">$nome</span>;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    }<br>
                    <span class="variable">$p</span> = <span class="keyword">new</span> <span class="function">Paciente</span>(<span class="string">"teste"</span>);<br>
                    <span class="function">var_dump</span>(<span class="variable">$p</span>);<br>
                    <span class="output">// Saída: object(Paciente)#1 (1) { ["nome":"Paciente":private]=> string(5) "teste" }</span>
                </div>
            </div>
            
            <div class="section">
                <h2>Tabela de Resumo dos Tipos</h2>
                <table>
                    <tr>
                        <th>Tipo</th>
                        <th>Descrição</th>
                        <th>Exemplo</th>
                    </tr>
                    <tr>
                        <td>int</td>
                        <td>Números inteiros sem casas decimais</td>
                        <td><code>42</code>, <code>0x1A</code> (hex), <code>0b101</code> (bin)</td>
                    </tr>
                    <tr>
                        <td>float</td>
                        <td>Números com casas decimais (ponto flutuante)</td>
                        <td><code>3.14</code>, <code>3e2</code> (científico)</td>
                    </tr>
                    <tr>
                        <td>string</td>
                        <td>Sequência de caracteres</td>
                        <td><code>"texto"</code>, <code>'texto'</code></td>
                    </tr>
                    <tr>
                        <td>boolean</td>
                        <td>Valor lógico (verdadeiro ou falso)</td>
                        <td><code>true</code>, <code>false</code></td>
                    </tr>
                    <tr>
                        <td>array</td>
                        <td>Coleção ordenada de valores</td>
                        <td><code>[1, 2, 3]</code>, <code>["a" => "valor"]</code></td>
                    </tr>
                    <tr>
                        <td>object</td>
                        <td>Instância de uma classe</td>
                        <td><code>new MinhaClasse()</code></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <footer>
            <p>Guia de Referência de Tipos Primitivos em PHP - © 2025</p>
        </footer>
    </div>
</body>
</html>