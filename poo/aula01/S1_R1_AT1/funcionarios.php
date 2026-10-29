<?php 
require_once 'classe.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    // $f1 guarda um objeto da classe Funcionarios, criado com os dados do formulário.
    $f1 = new Funcionarios($_POST['nome'], $_POST['email']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
    <header>
        <h1>Bem vindos!</h1>
        <p>Caros funcionários, façam o seu cadastro</p>
    </header>
    <main>
        <section>
            <form method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome"><br>
        
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" ><br>
        
                <input type="submit" value="cadastrar"><br>
            </form>
        </section>
        <section>
            <button>
                <a href="index.php">Voltar ao home</a>
            </button>
        </section>
    </main>

<?php if (isset($f1)): ?>
    <?php
    // Exibe os dados depois que o funcionário é cadastrado.
    $f1->mostrarDados();
    ?>
    <!-- O link para produtos aparece somente após o cadastro do funcionário. -->
    <p><a href="produtos.php">Ir para cadastro de produtos</a></p>
<?php endif; ?>
</body>
</html>
