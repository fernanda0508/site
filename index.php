<?php
//TESTE DE VALIDAÇÃO DO LOGIN
session_start();
include_once('./form/config.php');

//COLOCANDO USUÁRIO E SENHA COM MÉTODO POST

if (isset($_POST['submit'])) {
    $nome_usuario  = $_POST['nome'] ? $_POST['nome'] : false;
    $pswd  = $_POST['senha'] ? $_POST['senha'] : false;

    //VERIFICANDO SE O USÚARIO EXISTE NO BANCO DE DADOS

    if (($nome_usuario) && ($pswd)) {
        $query = "SELECT usuario_nome FROM usuarios WHERE usuario_nome = '{$nome_usuario}' AND usuario_senha = '{$pswd}';";

        $result = mysqli_query($conexao, $query);

        $row = mysqli_num_rows($result);

        //VALIDAÇÃO
        if ($row == 1) {
            $_SESSION['usuario'] = $nome_usuario;
            header('Location: inicial.php');
        } else {
            echo ("<script>
        window.alert('Usuário ou Senha inválidos. Tente Novamente!')
        window.location.href='index.php';
    </script>");
        }
    }
}
?>

<html>

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <title>Vegan Food- Login</title>
    <img src="./img/login.png" alt="fotologin" width=400 height=425 id="imgpos" />


    <!--estilizando o tela de login-->
    <style>
        .avisoOff {
            display: none;
        }


        .avisoOn span.txt {
            font-size: 2rem;
        }

        .aviso span {
            font-size: 1.1rem;
        }

        body {
            font-family: 'Arial Narrow', Arial, sans-serif;
        }

        #imgpos {
            position: absolute;
            border-radius: 5px;
            right: 80px;
            left: 250px;
            top: 155px;
        }

        div {
            background-color: #90EE90;
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 5px;
            color: #000000;
            border: 1px solid black
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 20px;
        }

        input[type="submit"] {
            background-color: rgb(0, 0, 0);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
            transition: .3s;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgba(0, 0, 0, .8);
        }
    </style>

    <!--Iniciando codificação da tela de login-->
</head>

<body style="background-color: #f4f4f4" ;>

    <div>
        <!--FORMULÁRIO DE LOGIN-->
        <form action="" method="post">
            <h1>Login</h1>
            <input type="text" name="nome" placeholder="Usuário:">
            <br><br>
            <input type="password" name="senha" placeholder="Senha:">
            <br><br>

            <input type="submit" value="Acessar" name="submit">

            <p class="txt-center ls-login-signup">Não possui uma conta?
                <a style="text-decoration:none; color:#008080" href="cadastro.php">Cadastre-se agora</a>
            </p>
        </form>
    </div>
</body>

</html>