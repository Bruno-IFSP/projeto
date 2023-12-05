<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pergunta</title>
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
    <h2>Adicionar Pergunta</h2>

    <?php
    // Incluir o arquivo de configuração
    include('config.php');

    // Adicionar o código PHP para processar o formulário de adição de pergunta aqui
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se as variáveis estão definidas
        if (isset($_POST['idpergunta'], $_POST['textopergunta'])) {
            // Processar os dados do formulário e adicionar a pergunta ao banco de dados
            $idPergunta = $_POST['idpergunta'];
            $textoPergunta = $_POST['textopergunta'];

            $query = "INSERT INTO pergunta (idpergunta, textopergunta) VALUES ('$idPergunta','$textoPergunta')";
            $resultado = mysqli_query($conn, $query);

            // Verificar se a inserção foi bem-sucedida e exibir uma mensagem ao usuário
            if ($resultado) {
                echo "<p class='alert alert-success'>Pergunta adicionada com sucesso!</p>";
            } else {
                echo "<p class='alert alert-danger'>Erro ao adicionar pergunta: " . mysqli_error($conn) . "</p>";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="idpergunta">ID da Pergunta:</label>
        <input type="number" name="idpergunta" id="idpergunta" required>

        <label for="textopergunta">Enunciado:</label>
        <input type="text" name="textopergunta" id="textopergunta" required>

        <button type="submit">Adicionar Pergunta</button>
    </form>

</main>

<footer>
    &copy; 2023 Projeto IF.
</footer>

</body>
</html>
