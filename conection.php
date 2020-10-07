<?php
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

//Check Connection
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  
}

