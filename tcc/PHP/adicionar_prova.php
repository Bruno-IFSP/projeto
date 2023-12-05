<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Prova</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>Projeto IF</h1>
</header>

<nav>
    <a href="professor.html">Página Inicial</a>
    <a href="contato.html">Contato</a>
</nav>

<main>
    <h2>Adicionar Prova</h2>

    <?php
    
    include('config.php');

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['nomeprova'], $_POST['idprofessor'], $_POST['idarea'])) {
            
            $nomeProva = $_POST['nomeprova'];
            $idProfessor = $_POST['idprofessor'];
            $idArea = $_POST['idarea'];
            $idProva= $_POST['idprova'];

            $query = "INSERT INTO prova (nomeprova, idprofessor, idarea, idprova) VALUES ('$nomeProva','$idProfessor','$idArea','$idProva')";
            $resultado = mysqli_query($conn, $query);

            
            if ($resultado) {
                echo "<p class='alert alert-success'>Prova adicionada com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao adicionar prova: " . mysqli_error($conn) . "</p>";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nomeprova">Nome da Prova:</label>
        <input type="text" name="nomeprova" id="nomeprova" required>
        
        <label for="idprofessor">ID do Prova:</label>
        <input type="number" name="idprova" id="idprova" required>

        <label for="idprofessor">ID do Professor:</label>
        <input type="text" name="idprofessor" id="idprofessor" required>

        <label for="idarea">ID da Área:</label>
        <input type="text" name="idarea" id="idarea" required>

        <button type="submit">Adicionar Prova</button>
    </form>

</main>

<footer>
    &copy; 2023 Projeto IF.
</footer>

</body>
</html>
