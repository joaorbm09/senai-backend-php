<?php
// Inicia a sessão no topo do arquivo
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php 
    // Inclusão do 1º arquivo (cabeçalho)
    include 'header.php'; 
    ?>

    <h2>Cadastro de Informações</h2>

    <!-- Envia os dados via POST para a pag2.php -->
    <form action="pag2.php" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Cargo:</label><br>
        <input type="text" name="cargo" required><br><br>

        <label>Preferência de Tema:</label><br>
        <select name="tema">
            <option value="Claro">Claro</option>
            <option value="Escuro">Escuro</option>
        </select><br><br>

        <input type="submit" value="Salvar Dados">
    </form>

    <hr>
    <!-- Link para a página 2 -->
    <a href="pag2.php">Acessar Página 2</a>

    <?php 
    // Inclusão do 2º arquivo (rodapé)
    include 'footer.php'; 
    ?>

</body>
</html>