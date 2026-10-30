<?php 
require_once 'classe.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    // new cria um objeto da classe Cliente, guardado na variável $c1.
    $c1 = new Cliente($_POST['nome'], $_POST['idade'], $_POST['email']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <header>
        <h1>
            Bem vindos!
        </h1>
        <p>Caros clientes faaçam o seu cadastro</p>
    </header>
    <main>
        <section>
            <form method="post">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id=""><br>
        
                    <label for="idade">Idade: </label>
                    <input type="number" name="idade" id=""><br>
        
                    <label for="peso">email: </label>
                    <input type="email" name="email" id=""steps=0.5><br>
        
                    <input type="submit" value="cadastrar"><br>
            </form>
        </section>
        <section>
            <button>
                <a href="index.php">Voltar ao home</a>
            </button>
        </section>
    </main>
    <?php 
    if(isset($c1)){
    // Chama o método mostrarDados do objeto para exibir os dados do cliente.
    $c1->mostrarDados();
    }
    ?>
</body>
</html>