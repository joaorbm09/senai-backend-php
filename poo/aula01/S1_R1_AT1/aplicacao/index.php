<?php 
require_once 'Produtos.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $c1 = new Cliente($_POST['nome'], $_POST['idade'], $_POST['peso']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>
        <label for="preso">Preço: </label>
        <input type="number" name="preco" id=""steps=0.5><br>
        <input type="submit" value="cadastrar">
    </form>
    <?php 
    if(isset($c1)){
    $c1->mostrarDados();
    }
    ?>
</body>
</html>