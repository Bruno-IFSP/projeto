<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar uma nova prova</title>
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
    <h2>Adicionar uma nova prova</h2>

    <?php
// Incluir o arquivo de configuração
include('config.php');

// Adicionar o código PHP para processar o formulário de adição de prova aqui
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se as variáveis estão definidas
    if (isset($_POST['nomeprova'])) {
        // Processar os dados do formulário e adicionar a prova ao banco de dados
        $nomeProva = $_POST['nomeprova'];
        $pergunta = $_POST['pergunta'];
        $alternativa1 = $_POST['alternativa1'];
        $alternativa2 = $_POST['alternativa2'];
        $alternativa3 = $_POST['alternativa3'];
        $alternativa4 = $_POST['alternativa4'];

        $query = "INSERT INTO prova (nomeprova, pergunta) VALUES ('$nomeProva', '$pergunta')";
        $resultado = mysqli_query($conn, $query);

        if ($resultado) {
            $idProva = mysqli_insert_id($conn);

            // Adicionar as alternativas à prova
            $query = "INSERT INTO prova_alternativa (idprova, idalternativa) VALUES ('$idProva', '$idalternativa1')";
            $resultado = mysqli_query($conn, $query);

            $query = "INSERT INTO prova_alternativa (idprova, idalternativa) VALUES ('$idProva', '$idalternativa2')";
            $resultado = mysqli_query($conn, $query);

            $query = "INSERT INTO prova_alternativa (idprova, idalternativa) VALUES ('$idProva', '$idalternativa3')";
            $resultado = mysqli_query($conn, $query);

            if ($idalternativa4 != "") {
                $query = "INSERT INTO prova_alternativa (idprova, idalternativa) VALUES ('$idProva', '$idalternativa4')";
                $resultado = mysqli_query($conn, $query);
            }

            echo "<p class='alert alert-success'>Prova adicionada com sucesso!</p>";
        } else {
            echo "<p class='alert alert-danger'>Erro ao adicionar prova: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nomeprova">Nome da prova:</label>
        <input type="text" name="nomeprova" id="nomeprova" placeholder="Nome da prova" required>

        <label for="pergunta">Pergunta:</label>
        <input type="text" name="pergunta" id="pergunta" placeholder="Pergunta" required>

        <label for="alternativa1">Alternativa 1:</label>
        <input type="text" name="alternativa1" id="alternativa1" placeholder="Alternativa 1" required>

        <label for="alternativa2">Alternativa 2:</label>
        <input type="text" name="alternativa2" id="alternativa2" placeholder="Alternativa 2" required>

        <label for="alternativa3">Alternativa 3:</label>
        <input type="text" name="alternativa3" id="alternativa3" placeholder="Alternativa 3" required>

        <label for="alternativa4">Alternativa 4:</label>
        <input type="text" name="alternativa4" id="alternativa4" placeholder="Alternativa 4" required>

        <button type="submit">Adicionar prova</button>
    </form>

</main>

<footer>
    &copy; 2023 Projeto IF.
</footer>

</body>
</html>
