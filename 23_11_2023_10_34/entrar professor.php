
<?php

 

require('conexao.php');
if(
   isset( $_GET['acao'])&&
   $_GET['acao'] == 'logout'
){
   unset($_SESSION['aluno']);
}

if(
   isset($_POST['nomealuno'])&&
   isset($_POST['senhaaluno'])
   ){ 

    $email= $_POST['nomealuno'];
    $senha= $_POST['senhaaluno'];

    $query = "SELECT * FROM aluno
       WHERE
         senhaaluno = '$nome' AND
         senhaaluno = '$senha'
      ";

      $aluno = mysqli_query($con,$query);

      if( !$aluno ) {
         $erro = 'Login falhou.
          Verifique os dados.';

      }
      else{
         $_SESSION['aluno'] =
           mysqli_fetch_assoc($aluno);

           header('Location: topo.php');
           exit;

      }
}



 
 ?>
 

<!DOCTYPE html>
<html lang="en">
	<link rel="shortcut icon" type="imagex/png" href="enem1.png">
<head>
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>enem</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}
 

body {
	background-image: url("livros.jpg") ;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
    background-repeat: no-repeat;
    background-size: 100% 100% ;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}






h1 {
	font-weight: bold;
	margin: 0;
	background-color: #FFFFFF;
  margin top: 2px;
	text-align: center;
}

 h3{
	text-align: center;
 }
h2 {
	font-weight: bold;
	margin: 0;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #87ceeb ;
	background-color: #87ceeb;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	height: 70%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background color: #8a2be2;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(138, 43, 226, 1), 
			0 10px 10px rgba( 186, 85, 211, 1 );
	position: relative;
	overflow: hidden;
	width: 76px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
 
	height: 100%;
	transition: all 0.6s ease-in-out;
	background color: #FFFFFF;

}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}


.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #7b68ee ;
	background: -webkit-linear-gradient(to right, #7b68ee, #FF416C);
	background: linear-gradient(to right, #00ced1,#7b68ee  
    );
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 0px 0;
	background-color: #FFFFFF;
  
	text-align: center;
}
h1{
	background color:White ;


}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
	background color:White ;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
    </style>

 

 

<div class="container" id="container">
	<div class="form-container sign-up-container">
	

			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
	
			<span>Ou use seu email para cadastro</span>
 
	</div>
	<div class="form-container sign-in-container">
		 
			<div class="social-container">
				<br><BR>
			<h1>Entrar Professor(a)</h1>
<BR><rb>
		
				<a href="https://www.facebook.com/ " class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://www.linkedin.com/ " class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
            
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

			<span> </span>
            
                   
			<form action="index.html" method="POST" enctype="multipart/form-data">
			<input type="name" placeholder="name" name="nomealuno" />
			<br>
			<input type="password" placeholder="Password" name="senhaaluno"/>
			 <br><br>
            <button type="submit">Entrar</button>
			<br><br><br>
    </form> 
</div>


	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h2>Bem vindo de volta!</h2>
				<p>Para se manter conectado, faça login com suas informações pessoais</p>
	 
			</div>
			<div class="overlay-panel overlay-right">
				<h2>Olá, Amigo!</h2>
				<p>Insira seus dados pessoais e comece sua jornada conosco</p>
				<a href="cadastra ai aluno.php"><button class="ghost" id="signUp">Inscrever-se</button></a>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
	
	</p>
</footer>

</body>
</html>

<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo.';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }
  