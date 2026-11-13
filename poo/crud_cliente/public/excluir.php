<?php 
require_once __DIR__ . '/../repositories/ClienteRepository.php';

(new ClienteRepository())->excluir($_GET['id']);
header("Location: index.php");

?>