<?php

require('conexao.php');

//verificar se existe o $_GET['id]
if( isset( $_GET['id'])){

    //pega o valor do $_get['id']
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE usu_id = $id";

    if( mysqli_query($con,$query)) {

        echo '<div class="alerte-success">Registro removido.</div>';

    }


}


$query = 'SELECT * FROM users';

if(isset($_POST['buscado'])){ 

    $buscado = $_POST['buscado'];

  
$query = "SELECT * FROM users WHERE usu_name like '%$buscado%'";
}
$registros = mysqli_query($con,$query);

 ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <h1>Usuários<h1>
<a href= "novo.php" >novo</a>
<br>
 <form method = "POST">
    <br>
 <div class="input-group mb-3">
  <input type="text" name ="buscado" class="form-control" placeholder="digite o nome..." aria-label="digite o nome..." aria-describedby="button-addon2" >
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
</div>
</form>
 
<table class= "table table-striped tape-hver table-bordered">
      
      <tr>
           <th>ID</th>

           <th>Name</th>  

           <th>E-mail</th> 

           <th>Ações</th>
      </tr>

 
<tbody>
    <?php while ( $row = mysqli_fetch_assoc($registros) ) { ?>

<tr>

    <td><?php echo $row ['usu_id']?> </td>
    <td><?php echo $row ['usu_name']?></td>
    <td> <?php echo $row ['usu_email']?></td>
    <td> 
        <a
         class="btn btn-sm btn-danger"
         onclick="return confirm('Certeza?')"
         href="aula.php?id=<?php echo $row['usu_id'] ?>">Remover</a>  
 
     

    
<a href="editar.php?id=<?= $row['usu_id'] ?>">
<button type="button" class="btn btn-info">Editar</button>   
    </a>
    </tr>
    </td>
    <?php } ?>

</tbody>
<tfoot>
    </table>