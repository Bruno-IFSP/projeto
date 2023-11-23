<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'simulado';
$port = 3307;

$con = mysqli_connect(
    $servername, 
    $username, 
    $password, 
    $dbname,
    $port  
);

if(!$con){
    die('Conexão Falhou: '. mysql_connect_error()
);
};

// echo'OK! Conexão estabelecida com sucesso.';

?>