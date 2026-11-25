<?php
require_once '../repositories/MusicaRepository.php';

(new MusicaRepository())->excluir($_GET['id']);
header("Location: index.php");
?>
