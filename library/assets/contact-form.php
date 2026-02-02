<?php
include 'conexao.php';

// Inserir dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_escritor = $_POST['name_escritor'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $conteudo = $_POST['mensagem'];

    $sql = "INSERT INTO mensagem (nome_escritor, email, assunto, conteudo) VALUES ('$nome_escritor','$email','$assunto', '$conteudo')";
    

  
}

// Buscar e exibir dados


$conn->close();
?>
