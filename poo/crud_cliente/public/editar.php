<?php 
require_once __DIR__ . '/../repositories/ClienteRepository.php';

$repo = new ClienteRepository();

if($_POST){
    $cliente = new Cliente(
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );

    $repo->atualizar($_POST['id'], $cliente);
    header("Location: index.php");
    exit();
}

$cliente = $repo->buscarPId($_GET['id']);

?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
    <input type="delete" name="nome"  id="nome" value="<?= $cliente['nome'] ?>">
</form>