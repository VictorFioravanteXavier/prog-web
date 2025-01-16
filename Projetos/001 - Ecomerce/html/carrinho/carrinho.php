<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../entrar-cadastrar/entrar.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../../estilos/style.css">
    <link rel="shortcut icon" href="../../imagens/Logo_ico.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <header>
        <div>
            <a href="../index.html"><img src="../../imagens/Logo.png" alt="Logo do ecomerce" id="logo"></a>
        </div>
        <div class="search-bar">
            <form action="#">
                <label for="search" id="lupa"><img src="../../imagens/lupa_icon.png" id="lupa_icon" alt=""></label>
                <input type="text" name="search" id="search" placeholder="Faça uma pesquisa">
            </form>
        </div>
        <div id="icones">
            <ul>
                <li><a href="#"><img src="../../imagens/coracao_icon.png" id="coracao" alt=""></a></li>
                <li><a href="../carrinho/carrinho.php"><img src="../../imagens/carrinho_icon.png" id="carrinho"
                            alt=""></a></li>
                <li><a href="#"><img src="../../imagens/usuario_icon.png" id="usuario" alt=""></a></li>
            </ul>
        </div>
        <div id="entrar">
            <h2><a href="entrar-cadastrar/entrar.php">Entrar</a></h2>
        </div>
    </header>
    <hr>
    <nav>
        <div class="classificacao">
            <ul>
                <li><a href="../index.html">Todos</a></li>
                <li><a href="../navbar/star_wars.html">Star Wars</a></li>
                <li><a href="../navbar/super_heroes.html">Super Heroes</a></li>
                <li><a href="../navbar/arcade.html">Arcade</a></li>
                <li><a href="../navbar/ninjago.html">Ninjago</a></li>
                <li><a href="../navbar/harry_potter.html">Harry Potter</a></li>
                <li><a href="../navbar/veiculos.html">Veículos</a></li>
            </ul>
        </div>
    </nav>
    <main class="main-carrinho">
        <div id="produtos">
            <div id="titulo">
                <div id="t-produto">
                    <p>Produto</p>
                </div>
                <div class="separacao"></div>
                <div id="t-preço-unt">
                    <p>Preço unt.</p>
                </div>
                <div class="separacao"></div>
                <div id="t-quantidade">
                    <p>Quantidade</p>
                </div>
                <div class="separacao"></div>
                <div id="t-preco-total">
                    <p>Preço total</p>
                </div>
            </div>

            <div class="item">
                <div class="produto" data-id="1" data-nome="Lego Star Wars R2-D2" data-preco="219.50">
                    <img src="../../imagens/LEGO_Star_Wars_R2-D2.png" alt="Lego Star Wars R2-D2">
                    <p class="nome-produto">Lego Star Wars R2-D2</p>
                </div>
                <div class="separacao"></div>
                <div class="preço-unt">
                    <p>R$219,50</p>
                </div>
                <div class="separacao"></div>
                <div class="quantidade-carrinho">
                    <button class="subitrair">
                        <svg class="plus-sign" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12" stroke="black" stroke-width="2" />
                        </svg>
                    </button>
                    <input type="number" class="num-quantidade" value="1">
                    <button class="adicionar">
                        <svg class="plus-sign" viewBox="0 0 24 24">
                            <line x1="12" y1="5" x2="12" y2="19" stroke="black" stroke-width="2" />
                            <line x1="5" y1="12" x2="19" y2="12" stroke="black" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="separacao"></div>
                <div class="preco-total">
                    <p>R$219,50</p>
                </div>
            </div>

            <div class="separacao-horizontal"></div>

            <div class="item">
                <div class="produto" data-id="2" data-nome="Chapeu Seletor" data-preco="86.30">
                    <img src="../../imagens/Chapeu_Seletor.png" alt="Chapeu Seletor">
                    <p class="nome-produto">Chapeu Seletor</p>
                </div>
                <div class="separacao"></div>
                <div class="preço-unt">
                    <p>R$86,30</p>
                </div>
                <div class="separacao"></div>
                <div class="quantidade-carrinho">
                    <button class="subitrair">
                        <svg class="plus-sign" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12" stroke="black" stroke-width="2" />
                        </svg>
                    </button>
                    <input type="number" class="num-quantidade" value="1">
                    <button class="adicionar">
                        <svg class="plus-sign" viewBox="0 0 24 24">
                            <line x1="12" y1="5" x2="12" y2="19" stroke="black" stroke-width="2" />
                            <line x1="5" y1="12" x2="19" y2="12" stroke="black" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="separacao"></div>
                <div class="preco-total">
                    <p>R$86,30</p>
                </div>
            </div>

            <div class="separacao-horizontal"></div>

            <div class="item">
                <div class="produto" data-id="3" data-nome="Ferrari 488" data-preco="1599.99">
                    <img src="../../imagens/Ferrari_488.png" alt="Ferrari 488">
                    <p class="nome-produto">Ferrari 488</p>
                </div>
                <div class="separacao"></div>
                <div class="preço-unt">
                    <p>R$1599,99</p>
                </div>
                <div class="separacao"></div>
                <div class="quantidade-carrinho">
                    <button class="subitrair">
                        <svg class="plus-sign" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12" stroke="black" stroke-width="2" />
                        </svg>
                    </button>
                    <input type="number" class="num-quantidade" value="1">
                    <button class="adicionar">
                        <svg class="plus-sign" viewBox="0 0 24 24">
                            <line x1="12" y1="5" x2="12" y2="19" stroke="black" stroke-width="2" />
                            <line x1="5" y1="12" x2="19" y2="12" stroke="black" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="separacao"></div>
                <div class="preco-total">
                    <p>R$1599,99</p>
                </div>
            </div>
        </div>

        <div id="pagamento">
            <div id="inserir-informacoes">
                <div class="informacao">
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" id="cep">
                    <button onclick="calcularFrete()" class="btn-aplicar">Aplicar</button>
                </div>
                <div class="informacao">
                    <label for="codigo-promocional">Código Promocional:</label>
                    <input type="text" name="codigo-promocional" id="codigo-promocional">
                    <button onclick="aplicarCupon()" class="btn-aplicar">Aplicar</button>
                </div>
            </div>

            <div id="total-compra">
                <div id="valores">
                    <p>Frete: <span id="valorFrete">Coloque um cep</span></p>
                    <p>Preço produtos: <span id="precoProdutos">R$1905,79</span></p>
                    <p>Taxas: <span id="taxa"> R$200,00</span></p>
                    <p>Desconto: <span id="cupomAplicado">-R$ 0,00</span></p>
                </div>
                <div id="valor-compra">
                    <p>Valor Total da Compra</p>
                    <p><span id="totalCarrinho">2135,79</span></p>
                    <form action="../../php/logout.php" method="POST">
                        <button type="submit">Finalizar Compra</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="../../js/carrinho.js"></script>
    <script src="../../js/header.js"></script>
</body>

</html>