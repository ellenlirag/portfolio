<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios ORDER BY data_registro DESC";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuários</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f6f4;
      padding: 2rem;
    }
    h1 {
      color: #e74c3c;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 2rem;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    th, td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid #eee;
    }
    th {
      background: #e74c3c;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    a {
      display: inline-block;
      margin-top: 2rem;
      color: #e74c3c;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>Usuários Cadastrados</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Data de Registro</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($usuario = mysqli_fetch_assoc($resultado)) : ?>
        <tr>
          <td><?php echo $usuario['id']; ?></td>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['email']; ?></td>
          <td><?php echo date("d/m/Y H:i", strtotime($usuario['data_registro'])); ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <a href="login.php">← Voltar para o início</a>

</body>
</html>
