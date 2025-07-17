<?php

$servername = 'localhost';
$dbname = 'conderg';
$username = 'root';
$password = '';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Falha ba conexão: " .$conn->connect_error);
}

echo "Conectado com sucesso !";





