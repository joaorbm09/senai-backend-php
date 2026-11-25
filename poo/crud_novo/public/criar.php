<?php
require_once '../repositories/MusicaRepository.php';

if ($_POST) {
	$musica = new Musica(
    	$_POST['nome'],
    	$_POST['minutagem'],
    	$_POST['autor'],
    	$_POST['link']
	);

	(new MusicaRepository())->criar($musica);
	header("Location: index.php");
}
?>

<form method="post">
	<input name="nome" placeholder="Nome da música" required><br>
	<input name="minutagem" placeholder="Minutagem" required><br>
	<input name="autor" placeholder="Autor" required><br>
	<input name="link" placeholder="Link da música (ex: https://...)" type="url"><br>
	<button>Salvar</button>
</form>
