<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Referência - Strings em PHP</title>
    <style>
        :root {
            --primary-color: #8e44ad;
            --secondary-color: #9b59b6;
            --accent-color: #d1c4e9;
            --light-bg: #f5f5f5;
            --dark-bg: #333;
            --text-color: #333;
            --light-text: #f5f5f5;
            --code-bg: #272822;
            --code-color: #f8f8f2;
            --border-radius: 6px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--light-text);
            text-align: center;
            padding: 2rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--box-shadow);
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        h1 {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        main {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .sidebar {
            width: 250px;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
            margin-right: 2rem;
            position: sticky;
            top: 7rem;
            height: fit-content;
        }
        
        .sidebar-title {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--accent-color);
        }
        
        .sidebar ul {
            list-style-type: none;
        }
        
        .sidebar ul li {
            margin-bottom: 0.8rem;
        }
        
        .sidebar ul li a {
            color: var(--text-color);
            text-decoration: none;
            display: block;
            padding: 0.5rem;
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
        }
        
        .sidebar ul li a:hover {
            background-color: var(--accent-color);
            padding-left: 1rem;
        }
        
        .content {
            flex: 1;
        }
        
        .card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .card-icon {
            font-size: 1.8rem;
            margin-right: 1rem;
            color: var(--primary-color);
        }
        
        .card-title {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin: 0;
        }
        
        .example {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .example-title {
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }
        
        .example:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .code-block {
            background-color: var(--code-bg);
            border-radius: var(--border-radius);
            padding: 1rem;
            margin-bottom: 0.5rem;
            overflow-x: auto;
        }
        
        .code {
            font-family: 'Consolas', 'Monaco', monospace;
            color: var(--code-color);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .comment {
            color: #88846f;
        }
        
        .string {
            color: #a6e22e;
        }
        
        .variable {
            color: #f92672;
        }
        
        .keyword {
            color: #66d9ef;
        }
        
        .output {
            background-color: #f8f9fa;
            border-left: 4px solid var(--primary-color);
            padding: 1rem;
            font-family: monospace;
            margin-top: 0.5rem;
        }
        
        .explanation {
            background-color: #f8f8f8;
            border-radius: var(--border-radius);
            padding: 1rem;
            margin-top: 0.5rem;
        }
        
        .important {
            border-left: 4px solid #e74c3c;
            background-color: #fadbd8;
            padding: 1rem;
            margin: 1rem 0;
        }
        
        .important-title {
            font-weight: bold;
            color: #c0392b;
            margin-bottom: 0.5rem;
        }
        
        .tip {
            border-left: 4px solid #2ecc71;
            background-color: #e8f8f5;
            padding: 1rem;
            margin: 1rem 0;
        }
        
        .tip-title {
            font-weight: bold;
            color: #27ae60;
            margin-bottom: 0.5rem;
        }
        
        footer {
            background-color: var(--dark-bg);
            color: var(--light-text);
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                margin-right: 0;
                margin-bottom: 2rem;
                position: static;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Guia de Referência - Strings em PHP</h1>
            <div class="subtitle">Tudo o que você precisa saber sobre manipulação de strings</div>
        </div>
    </header>
    
    <main>
        <aside class="sidebar">
            <h2 class="sidebar-title">Conteúdo</h2>
            <ul>
                <li><a href="#introducao">Introdução às Strings</a></li>
                <li><a href="#aspas">Aspas Duplas vs Simples</a></li>
                <li><a href="#constantes">Constantes em Strings</a></li>
                <li><a href="#escape">Sequências de Escape</a></li>
                <li><a href="#unicode">Caracteres Unicode</a></li>
                <li><a href="#heredoc">Strings Heredoc</a></li>
                <li><a href="#nowdoc">Strings Nowdoc</a></li>
            </ul>
        </aside>
        
        <div class="content">
            <section id="introducao" class="card">
                <div class="card-header">
                    <div class="card-icon">📚</div>
                    <h2 class="card-title">Introdução às Strings em PHP</h2>
                </div>
                
                <p>Em PHP, strings são sequências de caracteres que podem ser definidas usando aspas simples (''), aspas duplas (""), sintaxe heredoc (<<<) ou sintaxe nowdoc (<<<'). Cada método tem suas particularidades e casos de uso específicos.</p>
                
                <div class="tip">
                    <div class="tip-title">Dica</div>
                    <p>A escolha entre diferentes tipos de strings depende principalmente se você precisa ou não que variáveis sejam interpretadas dentro da string.</p>
                </div>
            </section>
            
            <section id="aspas" class="card">
                <div class="card-header">
                    <div class="card-icon">🔤</div>
                    <h2 class="card-title">Aspas Duplas vs Simples</h2>
                </div>
                
                <div class="example">
                    <div class="example-title">Aspas Duplas (Double Quoted)</div>
                    <div class="code-block">
                        <pre class="code"><span class="variable">$nome</span> = <span class="string">"Gustavo"</span>;
<span class="variable">$sobrenome</span> = <span class="string">"Guanabara"</span>;
<span class="comment">// Aspas duplas interpretam variáveis e códigos unicode</span>
<span class="keyword">echo</span> <span class="string">"$nome $sobrenome \u{1f596}"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        $nome = "Gustavo";
                        $sobrenome = "Guanabara";
                        echo "$nome $sobrenome \u{1f596}";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>As aspas duplas permitem a <strong>interpolação de variáveis</strong>, ou seja, o PHP substitui automaticamente o nome da variável pelo seu valor. Também interpretam caracteres unicode usando a notação <code>\u{código-unicode}</code>.</p>
                    </div>
                </div>
                
                <div class="example">
                    <div class="example-title">Aspas Simples (Single Quoted)</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// Aspas simples não interpretam variáveis nem códigos unicode</span>
<span class="keyword">echo</span> <span class="string">'$nome $sobrenome \u{1f596}'</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo '$nome $sobrenome \u{1f596}';
                        ?>
                    </div>
                    <div class="explanation">
                        <p>As aspas simples exibem exatamente o que está escrito, sem interpretar variáveis ou códigos especiais. São mais eficientes quando não há necessidade de interpolação.</p>
                    </div>
                </div>
                
                <div class="important">
                    <div class="important-title">Importante</div>
                    <p>Use aspas simples quando não precisar interpretar variáveis ou sequências de escape, pois são processadas mais rapidamente pelo PHP.</p>
                </div>
            </section>
            
            <section id="constantes" class="card">
                <div class="card-header">
                    <div class="card-icon">🔒</div>
                    <h2 class="card-title">Constantes em Strings</h2>
                </div>
                
                <div class="example">
                    <div class="example-title">Constantes não são interpoladas automaticamente</div>
                    <div class="code-block">
                        <pre class="code"><span class="keyword">const</span> <span class="variable">ESTADO</span> = <span class="string">"CE"</span>;
<span class="comment">// Constantes não são interpretadas com aspas duplas</span>
<span class="keyword">echo</span> <span class="string">"Moro no "</span>. <span class="variable">ESTADO</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        const ESTADO = "CE";
                        echo "Moro no ". ESTADO;
                        ?>
                    </div>
                    <div class="explanation">
                        <p>Diferente das variáveis, as constantes não são automaticamente interpretadas dentro de strings com aspas duplas. É necessário concatenar usando o operador ponto (.).</p>
                    </div>
                </div>
                
                <div class="example">
                    <div class="example-title">Tentativa incorreta de usar constante</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// Isso não vai funcionar como esperado</span>
<span class="keyword">echo</span> <span class="string">"Moro no ESTADO"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo "Moro no ESTADO";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>Neste exemplo, o PHP não reconhece "ESTADO" como uma constante dentro da string, e simplesmente exibe o texto literal "ESTADO".</p>
                    </div>
                </div>
            </section>
            
            <section id="escape" class="card">
                <div class="card-header">
                    <div class="card-icon">⏎</div>
                    <h2 class="card-title">Sequências de Escape</h2>
                </div>
                
                <div class="example">
                    <div class="example-title">Quebra de linha (\n)</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// \n cria uma quebra de linha</span>
<span class="keyword">echo</span> <span class="string">"Quebra de linha \n nova linha"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo "Quebra de linha \n nova linha";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>A sequência \n insere uma quebra de linha. No ambiente HTML, isso pode não ser visível a menos que esteja dentro de uma tag &lt;pre&gt; ou formatado com CSS.</p>
                    </div>
                </div>
                
                <div class="example">
                    <div class="example-title">Tabulação (\t)</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// \t insere uma tabulação</span>
<span class="keyword">echo</span> <span class="string">"Exemplo de tab: \t tab"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo "Exemplo de tab: \t tab";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>A sequência \t insere uma tabulação (espaço de tab).</p>
                    </div>
                </div>
                
                <div class="example">
                    <div class="example-title">Barra invertida (\\)</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// \\ para exibir a barra invertida</span>
<span class="keyword">echo</span> <span class="string">"Essa é uma barra invertida: \\"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo "Essa é uma barra invertida: \\";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>Para exibir uma barra invertida literal, use duas barras invertidas \\.</p>
                    </div>
                </div>
                
                <div class="example">
                    <div class="example-title">Cifrão (\$)</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// \$ para mostrar o símbolo do cifrão</span>
<span class="keyword">echo</span> <span class="string">"Símbolo cifrão: \$"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo "Símbolo cifrão: \$";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>Para exibir um símbolo de cifrão literal sem que o PHP tente interpretá-lo como uma variável, use \$.</p>
                    </div>
                </div>
            </section>
            
            <section id="unicode" class="card">
                <div class="card-header">
                    <div class="card-icon">🌐</div>
                    <h2 class="card-title">Caracteres Unicode</h2>
                </div>
                
                <div class="example">
                    <div class="example-title">Exibindo caracteres Unicode</div>
                    <div class="code-block">
                        <pre class="code"><span class="comment">// \u{} para exibir caractere unicode</span>
<span class="keyword">echo</span> <span class="string">"Olá mundo \u{1F30E}"</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        echo "Olá mundo \u{1F30E}";
                        ?>
                    </div>
                    <div class="explanation">
                        <p>O PHP permite inserir caracteres Unicode usando a notação \u{código-hexadecimal}. Este exemplo mostra o emoji do globo terrestre usando seu código Unicode 1F30E.</p>
                    </div>
                </div>
                
                <div class="tip">
                    <div class="tip-title">Dica</div>
                    <p>Para encontrar códigos Unicode de emojis e outros símbolos, você pode consultar sites como <a href="https://unicode-table.com" target="_blank">unicode-table.com</a>.</p>
                </div>
            </section>
            
            <section id="heredoc" class="card">
                <div class="card-header">
                    <div class="card-icon">📝</div>
                    <h2 class="card-title">Strings Heredoc</h2>
                </div>
                
                <div class="example">
                    <div class="example-title">Sintaxe Heredoc</div>
                    <div class="code-block">
                        <pre class="code"><span class="variable">$pais</span> = <span class="string">"Brasil"</span>;
<span class="variable">$teste</span> =
<span class="keyword">&lt;&lt;&lt; QUALQUER</span>
Oi,
        tudo bem?
    meu país é o: $pais
<span class="keyword">QUALQUER</span>;
<span class="keyword">echo</span> <span class="variable">$teste</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        $pais = "Brasil";
                        $teste = <<< QUALQUER
Oi,
        tudo bem?
    meu país é o: $pais
QUALQUER;
                        echo $teste;
                        ?>
                    </div>
                    <div class="explanation">
                        <p>Heredoc é uma forma de definir strings multi-linha que funciona de forma similar às aspas duplas. As variáveis são interpretadas e a formatação (quebras de linha, espaços, etc.) é preservada.</p>
                    </div>
                </div>
                
                <div class="important">
                    <div class="important-title">Importante</div>
                    <p>O identificador de fechamento (neste exemplo, "QUALQUER") deve estar no início da linha, sem espaços ou tabulações antes dele.</p>
                </div>
            </section>
            
            <section id="nowdoc" class="card">
                <div class="card-header">
                    <div class="card-icon">📄</div>
                    <h2 class="card-title">Strings Nowdoc</h2>
                </div>
                
                <div class="example">
                    <div class="example-title">Sintaxe Nowdoc</div>
                    <div class="code-block">
                        <pre class="code"><span class="variable">$teste2</span> =
<span class="keyword">&lt;&lt;&lt; 'QUALQUER'</span>
Oi,
        tudo bem?
    meu país é o: $pais
<span class="keyword">QUALQUER</span>;
<span class="keyword">echo</span> <span class="variable">$teste2</span>;</pre>
                    </div>
                    <div class="output">
                        <?php
                        $teste2 = <<< 'QUALQUER'
Oi,
        tudo bem?
    meu país é o: $pais
QUALQUER;
                        echo $teste2;
                        ?>
                    </div>
                    <div class="explanation">
                        <p>Nowdoc é similar ao Heredoc, mas funciona como aspas simples. As variáveis <strong>não são interpretadas</strong> e o texto é exibido literalmente. Note o uso de aspas simples ao redor do identificador.</p>
                    </div>
                </div>
                
                <div class="tip">
                    <div class="tip-title">Quando usar</div>
                    <p>Use Nowdoc quando precisar de blocos de texto multilinha que contenham código, sem que o PHP tente interpretar variáveis ou sequências de escape.</p>
                </div>
            </section>
        </div>
    </main>
    
    <footer>
        <div class="footer-content">
            <p>Guia de Referência de Strings em PHP | Criado para consultas rápidas</p>
            <p>&copy; <?php echo date('Y'); ?> | Curso de PHP</p>
        </div>
    </footer>
</body>
</html>