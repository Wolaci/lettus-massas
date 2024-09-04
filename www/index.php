<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>Lettus Massas Finas</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favico.jpeg" type="image/x-icon">
</head>
<body>
    <div class="models">
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img src="" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price">R$ --</div>
            <div class="pizza-item--name">--</div>
            <div class="pizza-item--desc">--</div>
        </div>
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>
    </div>
    <header>
        <div class="header-content">
            <a href="index.html"><img src="images/logo.jpg" alt="Logo" class="logo"></a>
            <nav class="menu">
                <ul>
                    <!-- <li><a href="#menu">Sobre Nós</a></li> -->
                    <li><a href="#profile">Wolaci Silva</a></li>
                </ul>
            </nav>
        </div>
        <div class="menu-openner"><span>0</span>🛒</div>
    </header>
    <main>
        <h1>Pizzas</h1>
        <div class="pizza-area"></div>
    </main>
    <aside>
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Suas Pizzas</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto (-10%)</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar" id="sendButton">Finalizar a compra</div>
            </div>
        </div>
    </aside>
    <div class="pizzaWindowArea">
        <div class="pizzaWindowBody">
            <div class="pizzaInfo--cancelMobileButton">Voltar</div>
            <div class="pizzaBig">
                <img src="" />
            </div>
            <div class="pizzaInfo">
                <h1>--</h1>
                <div class="pizzaInfo--desc">--</div>
                <div class="pizzaInfo--sizearea">
                    <div class="pizzaInfo--sector">Tamanho</div>
                    <div class="pizzaInfo--sizes">
                        <div data-key="0" class="pizzaInfo--size">PEQUENA <span>--</span></div>
                        <div data-key="1" class="pizzaInfo--size">MÉDIO <span>--</span></div>
                        <div data-key="2" class="pizzaInfo--size selected">GRANDE <span>--</span></div>
                    </div>
                </div>
                <div class="pizzaInfo--pricearea">
                    <div class="pizzaInfo--sector">Preço</div>
                    <div class="pizzaInfo--price">
                        <div class="pizzaInfo--actualPrice">R$ --</div>
                        <div class="pizzaInfo--qtarea">
                            <button class="pizzaInfo--qtmenos">-</button>
                            <div class="pizzaInfo--qt">1</div>
                            <button class="pizzaInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="pizzaInfo--addButton">Adicionar ao carrinho</div>
                <div class="pizzaInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="scripts/pizzas.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>