<?php

//INDICANDO PRA ONDE O LOGIN VAI ENVIAR O USUÁRIO
session_start();

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.png">

    <title>Vegan Food</title>

</head>

<body>

    <!--Menu principal do sistema-->

    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a href="./inicial.php">
                        <img src="./img/veganfood.png" width="130" height="130" />
                    </a>
                </div>
                <div class="busca">
                    <input placeholder="Pesquisar" type="text" />
                </div>
                <!--BOTÃO DE ENVIAR RECEITA-->

                <a href="./form/enviarReceita.php" class="button">Enviar Sua Receita</a>

                <!--ESTILIZANDO O BOTÃO DE SAIR-->

                <style>
                    .sair {

                        color: black;
                        /*
                        margin-left: 100%;
                        margin-top: -90px;
                        padding: 10px 20px;*/
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 15px;
                        font-family: Verdana, Geneva, Tahoma, sans-serif;
                    }
                </style>
            </div>
            </div>
        </main>
    </header>

    <!--CATEGORIA DE CADA RECEITA-->

    <main class="col-100 menu-urls">
        <div class="header-2  ">
            <div class="menu">
                <ul>


                    <li>
                        <a href="./categoria/cafemanha.html">Café da Manhã</a>
                    </li>
                    <li>
                        <a href="./categoria/salada.html">Saladas e Molhos</a>
                    </li>
                    <li>
                        <a href="./categoria/doces.html">Doces</a>
                    </li>
                    <li>
                        <a href="./categoria/carne.html">Substituição de Carne</a>
                    </li>
                    <li>
                        <a href="./categoria/lanche.html">Lanche</a>
                    </li>
                    <!--BOTÃO DE SAIR DO SISTEMA-->
                    <form class="sair">
                        <a class="sair" href="./index.php">Sair</a>
                    </form>
                    <style>
                        .sair {
                            color: red;
                            /* COR DAS CATEGORIAS*/
                            text-decoration: none;
                            margin-left: 15px;
                            font-size: 18px;
                            text-transform: uppercase;
                        }
                    </style>


                </ul>
            </div>

        </div>
    </main>
    <!--CARROSSEL-->
    <div class="col-100">
        <div class="slider-principal">
            <img src="./img/banner02.png" />
            <img src="./img/banner02.png" />
            <img src="./img/banner02.png" />

        </div>
    </div>
    <!--2° CONTAINER DA PÁGINA HOME-->
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>Vejas as receitas <strong>mais recomendadas</strong></h1>

            <div class="col-3 bloco-texto">
                <a href="./cafemanhaReceitas/torradinhas.html">
                    <img src="./img/torrada.png" width:="300px" height="200px" />
                    <h3><b>Torradinhas de Pão Pita Integral</b></h3>
                </a>

            </div>
            <div class="col-3 bloco-texto">
                <a href="./doceRceitas/cookie.html">
                    <img src="./img/carrossel-cookie.jpg" width:="300px" height="200px" />
                    <h3><b> Cookie Vegano</b></h3>
                </a>

            </div>
            <div class="col-3 bloco-texto" style="padding-right: 40px; padding-left: 30px;">
                <a href="./cafemanhaReceitas/sufle.html">
                    <img src="./img/sufle.jpg" width:="300px" height="200px" />
                </a>
                <h3><b>Suflê de Ovos</b></h3>
            </div>
        </div>
    </div>
    <!--ATALHO PARA AS CATEGORIAS-->
    <div id="cont" class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 15%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="./categoria/lanche.html">
                    <img src="./img/lanche.jpg">
                    <p><b>LANCHE</b></p>

                    <p>Veja receitas incríveis e que darão água na boca. São fáceis
                        e práticas de fazer no dia a dia e ainda ajudam na saúde
                        física do corpo humano.
                </a>


                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="./categoria/cafemanha.html">
                    <img src="./img/panqueca.webp">
                    <p><b>CAFÉ DA MANHÃ </b></p>
                    <p>Veja receitas incríveis e que darão água na boca. São fáceis
                        e práticas de fazer no dia a dia e ainda ajudam na saúde
                        física do corpo humano.
                </a>


                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="./categoria/salada.html">
                    <img src="./img/arroz.jpg">
                    <p><b>SALADAS E MOLHOS</b></p>
                    <p>Veja receitas incríveis e que darão água na boca. São fáceis
                        e práticas de fazer no dia a dia e ainda ajudam na saúde
                        física do corpo humano.
                </a>


                </p>
            </div>
        </div>

        <div class="content" style="margin-left: 15%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="./categoria/carne.html">
                    <img src="./img/janta02.jpg">
                    <p><b>JANTA</b></p>
                    <p>Veja receitas incríveis e que darão água na boca. São fáceis
                        e práticas de fazer no dia a dia e ainda ajudam na saúde
                        física do corpo humano.
                </a>


                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="./categoria/doces.html">
                    <img src="./img/doce.jpg">
                    <p><b>DOCES </b></p>
                    <p>Veja receitas incríveis e que darão água na boca. São fáceis
                        e práticas de fazer no dia a dia e ainda ajudam na saúde
                        física do corpo humano.
                </a>


                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="./categoria/carne.html">
                    <img src="./img/carne.jpg">

                    <p><b>SUBSTITUIÇÃO DE CARNE </b></p>

                    <p>Veja receitas incríveis e que darão água na boca. São fáceis
                        e práticas de fazer no dia a dia e ainda ajudam na saúde
                        física do corpo humano.
                </a>


                </p>
            </div>
        </div>
    </div>

    <!--BLOCO COM IMAGENS DA NESTLÉ E TUDO GOSTOSO-->

    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="img/tudogostoso.png" />
            </div>
            <div class="col-4">
                <img alt="logo" title="logo" src="img/nestle.png" />
            </div>
            <div class="col-4">
                <br />
                <img alt="logo" title="logo" src="img/tudogostoso.png" />
            </div>
            <div class="col-4">
                <img alt="Puma" title="Puma" src="img/nestle.png" />
            </div>
        </div>
    </div>

    <!--RODAPÉ-->
    <footer>
        <div class="col-100 footer">
            <div class=" content">
                <div class="col-4">
                    <h3><b>Categorias</b></h3>
                    <a href="./categoria/cafemanha.html" class="letra-branca">
                        <p>Café da Manhã</p>
                    </a>
                    <a href="./categoria/carne.html" class="letra-branca">
                        <p>Almoço</p>
                    </a>
                    <a href="./categoria/salada.html" class="letra-branca">
                        <p>Saladas e Molhos</p>
                    </a>
                    <a href="./categoria/lanche.html" class="letra-branca">
                        <p>Lanche</p>
                    </a>
                    <a href="./categoria/carne.html" class="letra-branca">
                        <p>Substituição de Carne</p>

                    </a>
                </div>
                <div class="col-4">
                    <h3><b>Especiais</b></h3>
                    <a href="./saladaReceitas/saladagrega.html">
                        <p class="letra-branca">Salada Grega Vegana</p>
                    </a>
                    <a href="./saladaReceitas/molhobranco.html">
                        <p class="letra-branca">Molho Branco de Tofu</p>
                    </a>
                    <a href="./doceRceitas/sorvete.html">
                        <p class="letra-branca">Sorvete de Chocolate Vegano</p>
                    </a>
                    <a href="./lancheReceitas/pastel.html">
                        <p class="letra-branca">Pastel Vegano Simples</p>
                    </a>

                </div>
                <div class="col-4">
                    <h3><b>Sobre</b></h3>

                    <a href="./termo.html" class="letra-branca">
                        <p>Termos de uso e
                            política de privacidade</p>
                    </a>
                </div>
                <div class="col-4">
                    <h3><b>Localização</b></h3>
                    <p>
                        Somos pessoas físicas que trabalham virtualmente para que
                        a sociedade vegana e vegetariana possa se alimentar bem e
                        de maneira saudável
                    </p>
                    <p class="local">Guajará-Mirim, RO
                    <p>
                    <p class="emailico">fernanda.n@edu.ifro.br
                    <p>
                    <p class="telefoneico">(69) 9 3541-4584
                    <p>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-100 footer-2">
        <div class="content">

            <p>
                © COPYRIGHT 2021 VEGANFOOD INTERNET, TODOS OS DIREITOS RESERVADOS. PROIBIDA A REPRODUÇÃO SEM
                AUTORIZAÇÃO.
            </p>
        </div>
    </div>
    <!--Scripts do Javascript-->
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>