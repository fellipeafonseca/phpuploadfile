<?php

//Definir formato de arquivo
header('Content-Type:'."text/plain");

session_start(); //Inicialize BD

//Connection with BD

//Server Name
$servidor = "localhost";
//User
$usuario = "user1";
//Password
$senha = "";
//BD
$dbname = "comercial";

//Connection
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$sql = 'SELECT * FROM usuarios';
$result = mysqli_query($conn, $sql); //Executar a SQL
$n = mysqli_num_rows($result); //Número de Linhas retornadas

if (!$result) {
    //Caso não haja retorno
    echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"';
    echo '}]';
} else if ($n < 1) {
    //Caso não tenha nenhum item
    echo '[{"erro": "Não há nenhum dado cadastrado"';
    echo '}]';
} else {
    //Mesclar resultados em um array
    for ($i = 0; $i < $n; $i++) {
        $dados[] = mysqli_fetch_assoc($result);
    }
    echo json_encode($dados, JSON_PRETTY_PRINT);
}
