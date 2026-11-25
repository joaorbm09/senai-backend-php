<?php 
require_once __DIR__ . '/../repositories/ClienteRepository.php';

$id = filter_var($_POST['id'] ?? $_GET['id'] ?? null, FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1],
]);
if ($id === false) {
    http_response_code(400);
    exit('ID do cliente inválido.');
}

$repo = new ClienteRepository();
$cliente = $repo->buscarPId($id);
if ($cliente === false) {
    http_response_code(404);
    exit('Cliente não encontrado.');
}

if($_POST){
    $cliente = new Cliente(
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );

    $repo->atualizar($id, $cliente);
    header("Location: index.php");
    exit();
}

?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required><br>
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($cliente['email']) ?>" required><br>
    <label for="documento">CPF/CNPJ</label>
    <input type="text" name="documento" id="documento" value="<?= htmlspecialchars($cliente['documento']) ?>" required><br>
    <button type="submit">Salvar</button>
</form>
