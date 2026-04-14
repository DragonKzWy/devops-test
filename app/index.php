<?php

$host = "mysql";
$user = "root";
$password = "root";
$database = "testdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

echo "Conectado ao MySQL com sucesso!";
