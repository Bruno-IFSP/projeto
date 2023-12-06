<?php
require('config.php');

if (isset($_POST['nomeprofessor'])) {
    $nome = $_POST['nomeprofessor'];
    $senha = $_POST['senhaprofessor'];

    // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO professor (nomeprofessor, senhaprofessor) VALUES (?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ss", $nome, $senha);
        $status = $stmt->execute();

        // Display success or error messages
        if ($status) {
            echo 'OK! Cadastro salvo professor(a).';
        } else {
            echo 'Problema ao cadastrar.';
        }

        $stmt->close();
    } else {
        echo 'Erro na preparação da consulta.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastra ai professor!! </title>
</head>
<body>
<style>  
  body{
 
    
  }
 form {
    background-color: ;
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
 <h1>Cadastrar Novo Professor(a)</h1>
 <br><br>
 <a href= "../index.html" >incio</a>
 ou 
 <a href= "../PHP/entrar professor.php" >entrar</a>
 <br>
 </div>


  <form action="cadastra ai professor.php" method="POST">


 <br><br>
   <div id="sla"> 
  Nome:
  </div>
  <form method = "POST">
  <input type="text" name="nomeprofessor" id="idprofessor" class="inputUser" required>
  
  
 
  
  <br><br>
  <div id="sla"> 
  Senha:
</div>
  <form method = "POST">
  <input type="password" name="senhaprofessor" id="idprofessor" class="inputUser" required>
  
  <br>
 <br><br>
  
     
     <button type="submit">Salvar</button>
     </form>

     
</FROM>
</form>
 
<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo professor(a).';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }
?>
   </body>
</html>