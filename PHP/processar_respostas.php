<?php
include('config.php');

// Verificar se há dados no array $_POST['respostas']
echo (isset($_POST['pergunta1']));
echo($_POST['pergunta1']);
if (isset($_POST['respostas']) && is_array($_POST['respostas']) && !empty($_POST['respostas'])) {
    // Processar as respostas
    foreach ($_POST['respostas'] as $idPergunta => $idAlternativaEscolhida) {
        // Inserir na tabela tentativapergunta
        $query = "INSERT INTO tentativapergunta (idpergunta, idalternativa) VALUES ('$idPergunta', '$idAlternativaEscolhida')";
        $resultado = mysqli_query($conn, $query);

        // Adicione a lógica adicional conforme necessário
    }


    // Exibir mensagem de sucesso ou redirecionar para outra página
    echo "<p>Respostas enviadas com sucesso!</p>";
} else {
    // Nenhuma resposta foi enviada
    echo "<p>Nenhuma resposta foi enviada.</p>";
}


?>
