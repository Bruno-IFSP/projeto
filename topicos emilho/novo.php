<?php

require('conexao.php');

if(isset($_POST['usu_name'])){ 

    $nome = $_POST['usu_name'];
    $email= $_POST['usu_email'];
    $senha= $_POST['usu_password'];
 
$query = "INSERT INTO users (usu_name,usu_email,usu_password)   VALUES('$nome','$email','$senha')";
$status = mysqli_query($con,$query);
}

 
 ?>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">


 <h1>Cadastrar Novo Usuários<h1>
 <a href= "aula.php" >voltar</a>

 <form method = "POST">


  Nome:
  <input type="text" name="usu_name">
  <br><br>
  E-mail:
  <input type="email" name="usu_email">
  <br><br>
  Senha:
  <input type="password" name="usu_password">
  <br><br>

  <button>bsucar</button>





    <br>
    <div class= "mb-3">
      <label for="nome" class="form-label">Nome</label>
     <input  type="text"class="form-control" id= "nome" >
</div>

<div class="mb-3">
   <label for="exampleInputEmail1" class="for-label">Email address</label>
   <input type="email" class="form-control" id= "exampleInputEmail1" aria-describedby="emailHelp">
   <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
     
   <div class="mb-3">
   <label for="exempleInputPassword1" class="form-label">Password</label>
   <input type="password" class="form-control" id="exampleInputPassworf1">
</div>

<div class="mb-3 form-check">
   <label type="checkbox" class="form-check-input" id="exampleCheck1"></label>
   <input class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
     
     <button type="submit">Salvar</button>

     <br><br><br><br>
      
</form>
 
<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo.';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }