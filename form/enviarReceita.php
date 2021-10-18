<?php

if (isset($_POST['submit'])) {
    /*print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Categoria:' . $_POST['select']);
    print_r('<br>');
    print_r('Tempo de Preparo:' . $_POST['tempo_de_preparo']);
    print_r('<br>');
    print_r('Rendimento(porção): ' . $_POST['porcao']);
    print_r('<br>');
    print_r('Ingredientes:' . $_POST['ingredi']);
    print_r('<br>');
    print_r('Modo de Preparo:' . $_POST['modo-preparo']);*/


    include_once('config.php');

    $nome = $_POST['nome'];
    $categoria = $_POST['select'];
    $tempo_preparo = $_POST['tempo_de_preparo'];
    $rendimento = $_POST['porcao'];
    $ingredientes = $_POST['ingredi'];
    $modo_preparo = $_POST['modo-preparo'];

    $result = mysqli_query($conexao, "INSERT INTO receitas(nome,categoria,tempo_preparo,rendimento,ingredientes,modo_preparo) 
VALUES('$nome','$categoria','$tempo_preparo','$rendimento','$ingredientes','$modo_preparo')");
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/enviarReceita.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo.png">

    <title>Enviar Receita</title>

</head>

<body>

    <!-----------------------------MENU PRINCIPAL--------------------------------------->
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a href="../index.html">
                        <img src="../img/veganfood.png" width="130" height="130" />
                    </a>
                </div>
                <div class="busca">
                    <input placeholder="Pesquisar" type="text" />
                </div>

                <a href="../form/enviarReceita.php" class="button">Enviar Sua Receita</a>

            </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="../index.html">HOME</a>
                    </li>
                    <li>
                        <a href="../categoria/cafemanha.html">Café da Manhã</a>
                    </li>
                    <li>
                        <a href="../categoria/salada.html">Saladas e Molhos</a>
                    </li>
                    <li>
                        <a href="../categoria/doces.html">Doces</a>
                    </li>
                    <li>
                        <a href="../categoria/carne.html">Substituição de Carne</a>
                    </li>
                    <li>
                        <a href="../categoria/lanche.html">Lanche</a>
                    </li>

                </ul>
            </div>
        </div>
    </main>


    <!-- FORMULÁRIO -->
    <div class="box">
        <form method="POST" style="width: 50%; margin: 0px auto;">

            <br><br><br><br><br> <br>

            <br><br>
            <fieldset style=" border-radius: 10px;">
                <legend class="titulo-principal"><b>Envie Sua Receita</b></legend>
                <br>
                <!-- NOME DA RECEITA -->
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome da Receita*</label>
                </div>
                <br><br>
                <!-- INSERINDO IMAGEM -->
                <fieldset class="borda">
                    <legend class="title">Foto da Receita</legend>
                    <h4>• Envie apenas fotos TIRADAS POR VOCÊ.<br>

                        • Fotos de internet ou de outros sites NÃO SERÃO ACEITAS.<br>

                        • Você pode inserir apenas 1 foto.<br>

                        • A(s) foto(s) deve(m) ser no formato horizontal.<br>

                        • Cada foto deve ter no máximo 5mb.</h4>
                    <div class="inputBox">
                        <input type="file" id="flimage" name="flimage" accept="image/*">
                        <label for="nome" class="labelInput"></label>
                    </div>
                </fieldset>
                <br><br>

                <div class="inputBox">
                    <!-- SELEÇÃO DAS CATEGORIAS -->
                    <select name="select" required>
                        <option value="vazia" selected></option>
                        <option value="cafe">CAFÉ DA MANHÃ</option>
                        <option value="saladamolho">SALADAS E MOLHOS</option>
                        <option value="janta">DOCES</option>
                        <option value="carne">SUBS. CARNE</option>
                        <option value="lanche">LANCHE</option>
                    </select>
                    <label for="categoria" class="labelInput" required>Categoria* </label>
                </div>
                <br><br>

                <div class="inputBox">

                    <!--  PREPARO, RENDIMENTO E IGREDIENTES -->
                    <input type="text" id="edit-tempo-de-preparo" name="tempo_de_preparo" value="" size="3" maxlength="2">

                    <label for="edit-tempo-de-preparo" class="labelInput">Tempo de Preparo*
                        <span>(preparo + cozimento (minutos))</span></label>

                </div>
                <br><br>

                <div class="inputBox">
                    <input name="porcao" type="text" value="" size="3" maxlength="2" required="required">
                    <label for="porcao" class="labelInput">Rendimento(porção)*
                    </label>

                </div>
                <br><br>
                <fieldset class="borda">
                    <legend class="title">Igredientes</legend>
                    <!--DESCRIÇÃO DOS IGREDIENTES-------------------------------------------------->
                    <h4>
                        • Escreva cada ingrediente em uma linha.<br>

                        • Tente não utilizar medidas como "1 copo", "1 pedaço" ou "um pouco".<br>

                    </h4>
                    <!-------------------------------------------------------------------------->
                    <div class="inputBox">
                        <label for="edit-ingredientes" class="labelInpu">Ingredientes</label>
                        <div>
                            <textarea name="ingredi" id="edit-ingredientes" rows="4" cols="60" require></textarea>
                        </div>
                    </div>
                </fieldset>

                <br><br>
                <fieldset class="borda">
                    <legend class="title">Modo de Preparo</legend>
                    <h4>• Escreva cada passo em uma linha.<br>

                        • Procure separar por etapas (EX: preparo, cozimento, montagem...)<br>

                        • Se quiser, inclua um tópico de dica especial da sua receita.</h4>

                    <div class="inputBox">
                        <label for="edit-ingredientes" class="labelInpu" require>Modo de Preparo</label>
                        <div>
                            <textarea name="modo-preparo" rows="4" cols="60" required="required" aria-required="true"></textarea>
                        </div>
                    </div>
                </fieldset>
                <!-- ENVIAR RECEITA -->
                <br><br>
                <button onclick="redirecionar();" type="submit" id="submit" name="submit">Enviar Receita</button>
                <script type="text/javascript">
                    function redirecionar() {

                        if (confirm("Deseja Enviar receita?")) {
                            alert("você pressionou OK! Receita enviada com sucesso");
                            window.location.href = "http://localhost/VeganFood-main/form/enviarReceita.php";
                        } else

                            alert("você pressionou Cancelar! Sua receita não foi enviada");

                        /*window.location.href = "http://localhost/VeganFood-main/index.html";*/

                    }
                </script>
                <style>
                    #submit {
                        background-color: #4CAF50;
                        border: 1;
                        color: white;
                        padding: 10px 30px;
                        text-align: center;
                        margin-left: 40%;
                        text-decoration: none;
                        font-size: 12px;
                        font-family: Verdana, Geneva, Tahoma, sans-serif;
                        cursor: pointer;
                    }
                </style>

            </fieldset>
        </form>
    </div>


    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="../img/tudogostoso.png" />
            </div>
            <div class="col-4">
                <img alt="logo" title="logo" src="../img/nestle.png" />
            </div>
            <div class="col-4">
                <br />
                <img alt="logo" title="logo" src="../img/tudogostoso.png" />
            </div>
            <div class="col-4">
                <img alt="Puma" title="Puma" src="../img/nestle.png" />
            </div>
        </div>
    </div>
    <footer>
        <div class="col-100 footer">
            <div class=" content">
                <div class="col-4">
                    <h3><b>Categorias</b></h3>
                    <a href="../categoria/cafemanha.html" class="letra-branca">
                        <p>Café da Manhã</p>
                    </a>
                    <a href="../categoria/carne.html" class="letra-branca">
                        <p>Almoço</p>
                    </a>
                    <a href="../categoria/salada.html" class="letra-branca">
                        <p>Saladas e Molhos</p>
                    </a>
                    <a href="../categoria/lanche.html" class="letra-branca">
                        <p>Lanche</p>
                    </a>
                    <a href="../categoria/carne.html" class="letra-branca">
                        <p>Substituição de Carne</p>

                    </a>
                </div>
                <div class="col-4">
                    <h3><b>Especiais</b></h3>
                    <a href="../saladaReceitas/saladagrega.html">
                        <p class="letra-branca">Salada Grega Vegana</p>
                    </a>
                    <a href="../saladaReceitas/molhobranco.html">
                        <p class="letra-branca">Molho Branco de Tofu</p>
                    </a>
                    <a href="../doceRceitas/sorvete.html">
                        <p class="letra-branca">Sorvete de Chocolate Vegano</p>
                    </a>
                    <a href="../lancheReceitas/pastel.html">
                        <p class="letra-branca">Pastel Vegano Simples</p>
                    </a>

                </div>
                <div class="col-4">
                    <h3><b>Sobre</b></h3>

                    <a href="../termo.html" class="letra-branca">
                        <p>Termos de uso e
                            política de privacidade</p>
                    </a>
                </div>

                <!--------------------------------------------------------->
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
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-migrate.js"></script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
</body>

</html>