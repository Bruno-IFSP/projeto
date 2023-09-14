<?php
$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Defina as respostas corretas para cada pergunta
    $answers = array(
        "q1" => "Paris",
        "q2" => "4"
    );

    // Verifique as respostas submetidas pelo usuário
    foreach ($answers as $question => $correctAnswer) {
        if ($_POST[$question] == $correctAnswer) {
            $score++;
        }
    }

    // Redirecione o usuário para a página "result.php"
    header("Location: result.php");
    exit; // Certifique-se de que o código seja interrompido após o redirecionamento
}
?>
