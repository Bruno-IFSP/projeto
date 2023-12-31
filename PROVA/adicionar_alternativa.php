<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Alternativa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>Projeto IF</h1>
</header>

<nav>
    <a href="#">Página Inicial</a>
    <a href="#">Sobre</a>
    <a href="#">Contato</a>
</nav>

<main>
    <h2>Adicionar Alternativa</h2>

    <?php
    
    include('config.php');

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['idalternativa'], $_POST['textoalternativa'])) {
            
            $idAlternativa = $_POST['idalternativa'];
            $textoAlternativa = $_POST['textoalternativa'];

            $query = "INSERT INTO alternativa (idalternativa, textoalternativa) VALUES ('$idAlternativa','$textoAlternativa')";
            $resultado = mysqli_query($conn, $query);

            
            if ($resultado) {
                echo "<p class='alert alert-success'>Alternativa adicionada com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao adicionar alternativa: " . mysqli_error($conn) . "</p>";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="idalternativa">ID da Alternativa:</label>
        <input type="number" name="idalternativa" id="idalternativa" required>

        <label for="textoalternativa">Enunciado:</label>
        <input type="text" name="textoalternativa" id="textoalternativa" required>

        <button type="submit">Adicionar Alternativa</button>
    </form>

</main>

<footer>
    &copy; 2023 Projeto IF.
</footer>

</body>
</html>
