<?php
require_once '../repositories/MusicaRepository.php';

$repo = new MusicaRepository();
$musicas = $repo->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Músicas</title>
	<style>
    	body { font-family: Arial; margin: 40px; }
    	nav a { margin-right: 15px; text-decoration: none; font-weight: bold; }
    	table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    	th, td { border: 1px solid #ccc; padding: 8px; }
    	th { background: #eee; }
	</style>
</head>
<body>

<h1>Sistema de Cadastro de Músicas</h1>

<nav>
	<a href="index.php"> Listar Músicas</a>
	<a href="criar.php"> Nova Música</a>
</nav>

<table>
	<tr>
    	<th>ID</th>
    	<th>Nome</th>
    	<th>Minutagem</th>
    	<th>Autor</th>
    	<th>Link</th>
    	<th>Ações</th>
	</tr>

	<?php foreach ($musicas as $m): ?>
    	<tr>
        	<td><?= $m['id'] ?></td>
        	<td><?= $m['nome'] ?></td>
        	<td><?= $m['minutagem'] ?></td>
        	<td><?= $m['autor'] ?></td>
        	<td>
            	<?php if (!empty($m['link'])): ?>
                	<a href="<?= htmlspecialchars($m['link']) ?>" target="_blank">🔗 Ouvir</a>
            	<?php else: ?>
                	—
            	<?php endif; ?>
        	</td>
        	<td>
            	<a href="editar.php?id=<?= $m['id'] ?>"> Editar</a> |
            	<a href="excluir.php?id=<?= $m['id'] ?>"
               	onclick="return confirm('Deseja excluir?')"> Excluir</a>
        	</td>
    	</tr>
	<?php endforeach; ?>
</table>

</body>
</html>
