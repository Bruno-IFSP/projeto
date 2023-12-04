
<?php

require('config.php');

if(isset($_POST['nomealuno'])){

    $nome = $_POST['nomealuno'];
    
    $senha = $_POST['senhaaluno'];
    $query = "INSERT INTO aluno (nomealuno,senhaaluno) VALUES ('$nome','$senha')";

    $status = mysqli_query($con, $query);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastra ai aluno!! </title>
</head>
<body>
<style>  
  body{
 
    
  }
 form {
    background-color:  rgba(201, 201, 199, 0);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

 
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
 
#sla{
    margin-left: 3%;
}
 
button {
  background-color: #6a5acd;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}
 
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
 
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
 
img.avatar {
  width: 40%;
  border-radius: 50%;
}
 
.container {
  padding: 16px;
}
 
span.psw {
  float: right;
  padding-top: 16px;
}
 
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <br><br>
 
 <div id="sla"> 
 <h1>Cadastrar Novo Aluno(a)</h1>
 <br><br>
 <a href= "index.html" >incio</a>
 ou 
 <a href= "entrar.php" >entrar</a>
 <br>
 </div>


  <form action="cadastra ai aluno.php" method="POST">


 <br><br>
   <div id="sla"> 
  Nome:
  </div>
  <form method = "POST">
  <input type="text" name="nomealuno" id="idaluno" class="inputUser" required>
  
  
 
  
  <br><br>
  <div id="sla"> 
  Senha:
</div>
  <form method = "POST">
  <input type="password" name="senhaaluno" id="idaluno" class="inputUser" required>
  
  <br>
 <br><br>
  
     
     <button type="submit">Salvar</button>
     </form>

     
</FROM>
</form>
 
<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo Aluno(a).';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }
?>
   </body>
</html>