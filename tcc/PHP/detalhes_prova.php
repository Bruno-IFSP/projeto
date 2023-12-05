<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Prova</title>
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

<?php

include('config.php');


if (isset($_GET['idprova'])) {
    $idProva = $_GET['idprova'];

    
    $query = "SELECT * FROM prova WHERE idprova = $idProva";
    $resultado = mysqli_query($conn, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        
        $prova = mysqli_fetch_assoc($resultado);
        echo "<h2>Detalhes da Prova: {$prova['nomeprova']}</h2>";
        echo "<p>ID: {$prova['idprova']}</p>";

        echo "<form method='post' action='processar_respostas.php'>";
        echo "<input type='hidden' name='idprova' value='$idProva'>";

        $queryPerguntas = "SELECT * FROM perguntaprova JOIN pergunta ON perguntaprova.idpergunta = pergunta.idpergunta WHERE idprova = $idProva";
        $resultadoPerguntas = mysqli_query($conn, $queryPerguntas);
        $cont = 0;
        while ($pergunta = mysqli_fetch_assoc($resultadoPerguntas)) {
            echo "<div class='card'>";
            echo "<p class='pergunta'>{$pergunta['textopergunta']}</p>";

            
            $queryAlternativas = "SELECT * FROM perguntaalternativa JOIN alternativa ON perguntaalternativa.idalternativa = alternativa.idalternativa WHERE idpergunta = {$pergunta['idpergunta']}";
            $resultadoAlternativas = mysqli_query($conn, $queryAlternativas);

            echo "<div class='alternativas'>";
            echo "<input type='hidden' name='pergunta[{$cont}]' value='{$pergunta['idpergunta']}'>";
            while ($alternativa = mysqli_fetch_assoc($resultadoAlternativas)) {
                echo "<input type='radio' name='respostaPergunta[{$cont}]' value='{$alternativa['idalternativa']}'> {$alternativa['textoalternativa']}<br>";
            }
            echo "</div>"; 
            echo "</div>";
            $cont++; 
        }
        echo "<input type='hidden' name='qtdPerguntaProva' value='$cont'>";

          
        
        
        // while ($pergunta = mysqli_fetch_assoc($resultadoPerguntas)) {
        //     $idPergunta = $pergunta['idpergunta'];
        
            
        //     echo "<div class='card'>";
        //     echo "<p class='pergunta'>{$pergunta['textopergunta']}</p>";
        
            
        //     $queryAlternativas = "SELECT * FROM perguntaalternativa JOIN alternativa ON perguntaalternativa.idalternativa = alternativa.idalternativa WHERE idpergunta = $idPergunta";
        //     $resultadoAlternativas = mysqli_query($conn, $queryAlternativas);
        
        //     echo "<div class='alternativas'>";
        //     while ($alternativa = mysqli_fetch_assoc($resultadoAlternativas)) {
        //         $idAlternativa = $alternativa['idalternativa'];
        
                
        //         echo "<input type='radio' name='respostas[{$pergunta['idpergunta']}]' value='{$alternativa['idalternativa']}'> {$alternativa['textoalternativa']}<br>";
        //     }
        //     echo "</div>"; 
        //     echo "</div>"; 
        // }
        
        echo "<input type='submit' value='Enviar Respostas'>";
        echo "</form>";
        
    } else {
        echo "<p>Prova não encontrada.</p>";
    }
} else {
    echo "<p>ID da prova não fornecido.</p>";
}
?>



</main>

<footer>
    &copy; 2023 Projeto IF.
</footer>

</body>
</html>