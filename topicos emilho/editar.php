<?php

require('conexao.php');


if(isset($_POST['usu_name'])){ 

    $id = $_POST['usu_id'];
    $nome = $_POST['usu_name'];
    $email= $_POST['usu_email'];
    $senha= $_POST['usu_password'];

    echo $query = "UPDATE users SET
     usu_name = '$nome',
     usu_email = '$email',
     usu_password = '$senha'
     WHERE 
        usu_id = $id";
        
    if( mysqli_query($con,$query)) {

        echo '<div class="alert alert-success">Registro atualizado.</div>';

    }

 
}

if( isset( $_GET['id'])){

    $id =$_GET['id'];

    $query = "SELECT * FROM users WHERE  usu_id = $id";

    $user = mysqli_query($con,$query);

    if( mysqli_num_rows($user) == 0){

        header ('Loacation:aula.php');
        exit;
    }

    $user = mysqli_fetch_assoc($user);
    var_dump($user);
}


 
 ?>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">

<br>
 <h1>Editar Usuários<h1>
    <br>
 <a href= "aula.php" >voltar</a>
<br><br>
 <form  method = "POST">

<input type="hidden" value="<?= $id ?>"name= "usu_id">


  Nome:
  <input type="text" name="usu_name"value="<?= $user['usu_name']?>"
  >
  <br><br>
  E-mail:
  <input type="email" name="usu_email" value="<?= $user['usu_email']?>"
  >
  <br><br>
  Senha:
  <input type="password" name="usu_password" value="<?= $user['usu_password']?>"
  >
  <br><br>

  <button type="submit">Salvar</button>




<br>
    <br>
     
      
</form>
 
<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo.';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }