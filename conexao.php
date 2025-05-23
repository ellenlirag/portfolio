<?php
$host = "localhost";
$usuario = "root";
$senha = ""; // se estiver usando XAMPP, a senha normalmente é vazia
$banco = "meuportfolio";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>
