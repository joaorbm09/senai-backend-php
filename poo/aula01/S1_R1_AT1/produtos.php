<?php 
require_once 'classe.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $p1 guarda um objeto da classe Produtos.
    $p1 = new Produtos(
        $_POST['produto1'],
        $_POST['produto2'],
        (float) $_POST['preco1'],
        (float) $_POST['preco2']
    );
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários-produtos</title>
</head>
<body>
    <header>
        <h1>Produtos</h1>
        <p>Caros funcionários, cadastrem um novo produto!</p>
    </header>
    <main>
        <section>
            <form method="post">
                <label for="produto1">Produto 1:</label>
                <input type="text" name="produto1" id="produto1" required><br>

                <label for="preco1">Preço 1:</label>
                <input type="number" name="preco1" id="preco1" step="0.01" min="0" required><br>

                <label for="produto2">Produto 2:</label>
                <input type="text" name="produto2" id="produto2" required><br>

                <label for="preco2">Preço 2:</label>
                <input type="number" name="preco2" id="preco2" step="0.01" min="0" required><br>

                <input type="submit" value="Cadastrar">
            </form>
        </section>
        <section>
            <button>
                <a href="index.php">Voltar ao home</a>
            </button>
        </section>
    </main>

        <?php 
    if(isset($p1)){
    $p1->mostrarProduto();
    }
    ?>
</body>
</html>
