<?php
$servername = 'localhost';
$username = 'root';
$password = 'ifsp';
$dbname = 'simulado';
$port = 3306;

$mysqli = new mysqli($servername, $username, $password, $dbname, $port);

if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}
?>
