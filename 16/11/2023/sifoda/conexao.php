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
@session_start();
function verificarLogin() {

   if(

    !isset( $_SESSION['usuario'])||
    !$_SESSION['usuario'] 
   ){
     header('Location: enem.php');
     exit;

   }
}

?>