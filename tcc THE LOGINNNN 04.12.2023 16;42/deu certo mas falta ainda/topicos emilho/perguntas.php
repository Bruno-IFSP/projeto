<?php

require('conexao.php');

//verificar se existe o $_GET['id]
if( isset( $_GET['id'])){

    //pega o valor do $_get['id']
    $id = $_GET['id'];

    $query = "DELETE FROM perguntas WHERE perg_id = $id";

    if( mysqli_query($con,$query)) {

        echo '<div class="alerte-success">Registro removido.</div>';

    }


}


$query = 'SELECT * FROM perguntas p
JOIN topics t on p.top_id = t.top_id';

if(isset($_POST['buscado'])){ 

    $buscado = $_POST['buscado'];

  
$query = "SELECT * FROM perguntas WHERE perg_texto like '%$buscado%'";
}
$registros = mysqli_query($con,$query);

 ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <h1>Perguntas<h1>
<a href= "novapergunta.php" >novo</a>
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

           <th>Pergunta</th>  

           <th>Tópico</th> 

           <th>Usuário</th> 

           <th>Ações</th>
      </tr>

 
<tbody>
    <?php while ( $row = mysqli_fetch_assoc($registros) ) { ?>

<tr>

    <td><?php echo $row ['perg_id']?> </td>
    <td><?php echo $row ['perg_texto']?></td>
    <td> <?php echo $row ['top_descricao']?></td>
    <td> <?php echo $row ['usu_id']?></td>
    <td> 
        <a
         class="btn btn-sm btn-danger"
         onclick="return confirm('Certeza?')"
         href="perguntas.php?id=<?php echo $row['perg_id'] ?>">Remover</a>  
 
     

    
<a href="editarpergunta.php?id=<?= $row['perg_id'] ?>">
<button type="button" class="btn btn-info">Editar</button>   
    </a>
    </tr>
    </td>
    <?php } ?>

</tbody>
<tfoot>
    <tr>
        <td colspan="100">
        Registros encontrados:
        <?php echo mysqli_num_rows($registros);?>
        </td>
    </td>
<tfoot>
    </table>