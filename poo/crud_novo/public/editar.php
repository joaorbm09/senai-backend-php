<?php
require_once '../repositories/MusicaRepository.php';

$repo = new MusicaRepository();

if ($_POST) {
	$musica = new Musica(
    	$_POST['nome'],
    	$_POST['minutagem'],
    	$_POST['autor'],
    	$_POST['link']
	);

	$repo->atualizar($_POST['id'], $musica);
	header("Location: index.php");
}

$musica = $repo->buscarPorId($_GET['id']);
?>

<form method="post">
	<input type="hidden" name="id" value="<?= $musica['id'] ?>">
	<input name="nome" value="<?= $musica['nome'] ?>"><br>
	<input name="minutagem" value="<?= $musica['minutagem'] ?>"><br>
	<input name="autor" value="<?= $musica['autor'] ?>"><br>
	<input name="link" value="<?= $musica['link'] ?>" placeholder="Link da música" type="url"><br>
	<button>Atualizar</button>
</form>
