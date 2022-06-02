<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "login";


$conn = new mysqli($host, $username, $password, $database);

//condicao
if($conn->error) {
    die("Falha ao conectar ao banco de dados: " . $conn->error);
    
}