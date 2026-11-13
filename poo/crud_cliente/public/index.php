<?php 
require_once __DIR__ . '/../repositories/ClienteRepository.php';

$repo = new ClienteRepository();
$clientes = $repo->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de clientes</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px;

        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background: #eee;
        }
    </style>
</head>
<body>
    <h1>Sistema de clientes</h1>
    <nav>
        <a href="index.php">listar clientes</a>
        <a href="criar.php">Novo cliente</a>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>email</th>
            <th>documento</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($clientes as $c):?>
            <tr>
                <td><?= $c['id']?></td>
                <td><?= $c['nome']?></td>
                <td><?= $c['email']?></td>
                <td><?= $c['documento']?></td>
                <td><a href="editar.php?id=<?= $c['id'] ?>">Editar</a> | <a href="excluir.php?id=<?= $c['id'] ?>" onclick="return confirm('Deseja Excluir?')">Excluir</a></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>