<?php

include_once('./form/config.php');

if (isset($_POST['submit'])) {
    $nome_usuario = $_POST['nome'] ? $_POST['nome'] : false;
    $email_usuario = $_POST['email'] ? $_POST['email'] : false;
    $pswd = $_POST['senha'] ? $_POST['senha'] : false;
    $pswd_confirm = $_POST['senhaConfirm'] ? $_POST['senhaConfirm'] : false;

    if (($nome_usuario) && ($email_usuario) && ($pswd) && ($pswd_confirm)) {
        if (($pswd == $pswd_confirm)) {
            $result = mysqli_query(
                $conexao,
                "INSERT INTO usuarios(usuario_id, usuario_nome, usuario_email, usuario_senha) 
                VALUES (null, '$nome_usuario', '$email_usuario', '$pswd');"
            );
            header('Location: index.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.jpeg.jpeg" type="image/x-icon">
    <title> Vegan Food - Cadastro</title>

    <style>
        body {
            font-family: 'Arial Narrow', Arial, sans-serif;
            background-color: #f4f4f4;
        }

        #imgpos {
            position: absolute;
            right: 80px;
            left: 250px;
            top: 155px;
        }

        div {
            background-color: #90EE90;
            position: absolute;
            top: 50%;
            left: 50%;
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
            cursor: pointer;
            transition: .3s;
        }

        input[type="submit"]:hover {
            background-color: rgba(0, 0, 0, .8);
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class='card'>
            <form action="" method="post">
                <h1>Cadastre-se</h1>

                <label for="inputnome">Digite seu Usuário:</label>
                <input type="text" name="nome" id="inputnome" placeholder="Usuário:" required maxlength="25">
                <br><br>

                <label for="inputemail">Digite seu Email:</label>
                <input type="email" name="email" id="inputemail" placeholder="Email:" required maxlength="45">
                <br><br>

                <label for="inputsenha">Digite sua Senha:</label>
                <input type="password" name="senha" id="inputsenha" placeholder="Senha:" required maxlength="8">
                <br><br>

                <label for="inputconfsenha">Confirme sua Senha:</label>
                <input type="password" name="senhaConfirm" id="inputconfsenha" placeholder="Confirmar Senha:" required maxlength="8">
                <br><br>

                <input type="submit" name="submit" value="Criar conta">


                <p style="text-align: center;"><a style="text-decoration:none; color:#008080" href="./index.php">Voltar para o Login</a></p>


            </form>
        </div>
</body>

</html>