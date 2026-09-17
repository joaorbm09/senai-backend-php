<?php
// Inicia ou recupera a sessão ativa
session_start();

// Verifica se os dados vieram do formulário (método POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. REQUISITO SESSÃO: Salva o nome e o cargo na sessão
    $_SESSION["user"] = $_POST["nome"];
    $_SESSION["cargo"] = $_POST["cargo"];

    // 2. REQUISITO COOKIE: Salva o tema escolhido em um cookie válido por 1 dia (86400 segundos)
    setcookie("tema", $_POST["tema"], time() + 10);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <?php 
    // Inclusão do 1º arquivo (cabeçalho)
    include 'header.php'; 
    ?>

    <h2>Dados do Colaborador</h2>

    <?php
    // Exibe os dados armazenados na Sessão
    if (isset($_SESSION["user"])) {
        echo "<p>Usuário (Sessão): <strong>" . $_SESSION["user"] . "</strong></p>";
        echo "<p>Cargo (Sessão): <strong>" . $_SESSION["cargo"] . "</strong></p>";
    } else {
        echo "<p>Nenhum usuário salvo na sessão.</p>";
    }

    // Exibe o Cookie de preferência de tema
    // Se o cookie já estiver salvo usamos $_COOKIE, senão usamos o POST enviado
    if (isset($_COOKIE["tema"])) {
        echo "<p>Preferência de Tema (Cookie): <strong>" . $_COOKIE["tema"] . "</strong></p>";
    } elseif (isset($_POST["tema"])) {
        echo "<p>Preferência de Tema (Cookie recém-criado): <strong>" . $_POST["tema"] . "</strong></p>";
    } else {
        echo "<p>Nenhum cookie de tema encontrado.</p>";
    }
    ?>

    <hr>
    <!-- Link para voltar -->
    <a href="index.php">Voltar para o Formulário</a>

    <?php 
    // Inclusão do 2º arquivo (rodapé)
    include 'footer.php'; 
    ?>

</body>
</html>