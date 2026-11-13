<?php 
require_once __DIR__ . '/../repositories/ClienteRepository.php';

if($_POST){
    $cliente = new CLiente(
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );

    (new ClienteRepository())->criar($cliente);
    header("Location: index.php");
}
?>

<form action="" method="post">
    <input type="text" name="nome" id="nome" placeholder="nome" required><br>
    
    <input type="email" name="email" id="E-mail" placeholder="E-mail" required><br>

    <input type="text" name="documento" id="documento" placeholder="CPF/CNPJ" require><br>

    <button>Salvar</button>
</form>