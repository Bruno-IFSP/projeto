<?php

require('conexao.php');

if(isset($_POST['perg_texto'])){ 

    $texto = $_POST['perg_texto'];
    $topID= $_POST['top_id'];
    $usuID= $_POST['usu_id'];
 
$query = "INSERT INTO perguntas (perg_texto,top_id,usu_id)   VALUES('$texto','$topID','$usuID')";
$status = mysqli_query($con,$query);
}
 
$query ="SELECT * FROM topics ORDER BY top_descricao ASC";

$topicos = mysqli_query($con,$query);


$query ="SELECT * FROM users ORDER BY usu_name ASC";

$usuarios = mysqli_query($con,$query);
 
 
 ?>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">


 <h1>Cadastrar Nova Pergunta</h1>
 <a href= "perguntas.php" >voltar</a>

 <form method = "POST">

<br>
  Perguntas:
  <input type="text" name="perg_texto">
  <br><br>
  Tópico:
  <select name="top_id">
   <?php
   while($linha= mysqli_fetch_assoc($topicos)){ ?>
     <option value="<?=$linha['top_id']?>">
     <?=$linha['top_descricao'] ?>
   </option>
   <?php } ?>

</select>
  <br><br>
   
  Usuário:
  <select name="usu_id">
   <?php
   while($linha= mysqli_fetch_assoc($usuarios)){ ?>
     <option value=" <?=$linha['usu_id']?>">
     
     <?=$linha['usu_name'] ?>

     <?php } ?>
   </option>
   </select>
    

</select>
  <br><br>

  <button type="submit">Salvar</button>


 
</form>
 
<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo.';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }
