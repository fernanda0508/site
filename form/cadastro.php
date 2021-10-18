<?php

if (isset($_POST['submit'])) {
    /*print_r('Nome: ' . $_POST['nome_user']);
    print_r('<br>');
    print_r('Email:' . $_POST['email']);
    print_r('<br>');
    print_r('Senha:' . $_POST['senha']);
    print_r('<br>');*/


    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_user,email,senha) 
    VALUES('$nome','$email','$senha')");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(127, 255, 212), rgb(102, 205, 17));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(47, 79, 79);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid rgb(0, 250, 154);
        }

        legend {
            border: 1px solid rgb(0, 250, 154);
            padding: 10px;
            text-align: center;
            background-color: rgb(60, 179, 113);
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 255, 255), rgb(0, 128, 128));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(127, 255, 212), rgb(47, 79, 79));
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Casdastre-se</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha">Senha (Mínimo 6 caracteres)</label>
                    <input type="password" id="senha" name="senha" minlength="6" required>
                </div>
                <div>
                    <br><br>
                    <input class="submit" type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>