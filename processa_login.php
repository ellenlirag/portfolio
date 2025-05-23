<?php
// Importa o arquivo de conexão com o banco
include("conexao.php");

// Pega os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Evita SQL Injection (mais seguro)
$nome = mysqli_real_escape_string($conexao, $nome);
$email = mysqli_real_escape_string($conexao, $email);

// Cria o comando SQL para inserir os dados
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

// Executa a query e redireciona
if (mysqli_query($conexao, $sql)) {
    header("Location: index.html");
    exit();
} else {
    echo "Erro ao salvar os dados: " . mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);
?>
