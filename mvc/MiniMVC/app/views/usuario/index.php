<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuarios cadastrados</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>E-mail</th>
        </tr>
        <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>