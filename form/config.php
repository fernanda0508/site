<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'enviareceita';

$conexao = new mysqli(
    $dbHost,
    $dbUsername,
    $dbPassword,
    $dbName
);
//O tipo de caracteres a ser usado
header('Content-Type: text/html; charset=utf-8');

//Depois da tua conexão a base de dados insere o seguinte código abaixo.
//Esta parte vai resolver o teu problema!
mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, 'SET character_set_connection=utf8');
mysqli_query($conexao, 'SET character_set_client=utf8');
mysqli_query($conexao, 'SET character_set_results=utf8');

//if ($conexao->connect_errno) {
    //echo "Erro de Inserção";
//} else {
   // echo "Conexão Efetuada com Sucesso";
//}
