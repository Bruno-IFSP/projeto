<?php
// Inclui o arquivo de configuração, que provavelmente contém as configurações do banco de dados
include('config.php');

//primeiro: pegar o hidden com o número de perguntas via post.
//segundo: criar um for com o número de iterações sendo o valor retornado no hidden anterior
// terceiro: para cada pergunta valida, entrar no IF abaixo.

// Inicializa o contador e obtém o número total de perguntas a partir do formulário
$i = 0;
$nPergunta = $_POST['qtdPerguntaProva'];

// Inicializa a pontuação total
$pontuacaoTotal = 0;
// echo($nPergunta);

$idProva = $_POST['idprova'];
$idAluno = 1;
$query = "INSERT INTO tentativaprova(idprova,idaluno) values ($idProva, $idAluno)";
$resultadoInsert = mysqli_query($conn, $query); 
$query = "SELECT LAST_INSERT_ID()";
$resultado = mysqli_query($conn, $query);
if($resultado){
    $row= mysqli_fetch_assoc($resultado);
    $idtentativa = intval(implode($row));
    
}

// Loop para iterar sobre cada pergunta no formulário
while ($i < $nPergunta) {
    // Obtém o ID da pergunta do array $_POST
   $idpergunta = $_POST['pergunta'][$i];
  
    // Verifica se a resposta para a pergunta atual está definida no array $_POST
    if (isset($_POST['respostaPergunta'][$i])) {
        // Obtém o ID da resposta selecionada
        $idresposta = $_POST['respostaPergunta'][$i];
        // echo($idresposta);
        // Consulta SQL para obter se a resposta selecionada é correta
        $query = "SELECT p.correta, a.pontuacao 
          FROM perguntaalternativa p 
          INNER JOIN alternativa a ON p.idalternativa = a.idalternativa 
          WHERE p.idpergunta = $idpergunta AND a.idalternativa = $idresposta";
        $resultado = mysqli_query($conn, $query);

        // Verifica se a consulta foi bem-sucedida
        if ($resultado) {
            // Obtém a linha do resultado
            $row = mysqli_fetch_assoc($resultado);
            print(implode($row));
            
            // Verifica se a alternativa selecionada está correta
            if (trim((string)$row['correta']) === 'S') {

                // Print the query results for debugging
                print_r($row);
                // Insere na tabela tentativapergunta
                $queryInsert = "INSERT INTO tentativapergunta (idtentativaprova,idperguntaProva, idrespostaAluno) VALUES ($idtentativa,$idpergunta, $idresposta)";
                $resultadoInsert = mysqli_query($conn, $queryInsert);
            
                // Adiciona a pontuação ao total
                $pontuacaoTotal += $row['pontuacao'];
                echo "Pontuacao: " . $row['pontuacao'];
            }
        }
    }

    
    $i++;
}

// Verifica se pelo menos uma resposta foi enviada
if ($i > 0) {
    // Exibe a pontuação total
    echo "<p>Pontuação total: $pontuacaoTotal</p>";

  
    echo "<p>Respostas enviadas com sucesso!</p>";
} else {
    
    echo "<p>Nenhuma resposta foi enviada.</p>";
}
?>