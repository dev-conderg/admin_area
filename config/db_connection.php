<?php

// $servername = 'localhost';
// $dbname = 'conderg';
// $username = 'root';
// $password = '';

// $conn = new mysqli($servername,$username,$password,$dbname);

// if($conn->connect_error){
//     die("Falha ba conexão: " .$conn->connect_error);
// }

// echo "Conectado com sucesso !";

$host = 'localhost';
$dbname = 'conderg';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user,$pass);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}





