<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Provas</title>
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
    <h2>Provas Disponíveis</h2>

    <div class="provas-lista">
        <?php
        // Incluir o arquivo de configuração
        include('config.php');

        // Query para buscar as provas
        $query = "SELECT * FROM prova";
        $resultado = mysqli_query($conn, $query);

        // Loop through the result set and display the data with links to details
        while ($row = mysqli_fetch_assoc($resultado)) {
            $idProva = $row['idprova'];
            $nomeProva = $row['nomeprova'];
            echo "<section><p><a href='detalhes_prova.php?idprova=$idProva'>$nomeProva</a></p></section>";
        }
        ?>
    </div>

    <h2>Provas Adicionadas</h2>

    <!-- Exiba as provas do banco de dados aqui -->

</main>

<footer>
    &copy; 2023 Projeto IF.
</footer>

</body>
</html>
