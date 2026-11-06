<?php
$resultado = null;
$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = $_POST["numero1"] ?? "";
    $numero2 = $_POST["numero2"] ?? "";
    $operacao = $_POST["operacao"] ?? "";

    if (!is_numeric($numero1) || !is_numeric($numero2)) {
        $erro = "Digite dois números válidos.";
    } else {
        // Converte os valores recebidos em números.
        $numero1 = (float) $numero1;
        $numero2 = (float) $numero2;

        switch ($operacao) {
            case "somar":
                $resultado = $numero1 + $numero2;
                break;

            case "subtrair":
                $resultado = $numero1 - $numero2;
                break;

            case "multiplicar":
                $resultado = $numero1 * $numero2;
                break;

            case "dividir":
                if ($numero2 == 0) {
                    $erro = "Não é possível dividir por zero.";
                } else {
                    $resultado = $numero1 / $numero2;
                }
                break;

            default:
                $erro = "Selecione uma operação válida.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="post">
        <label for="numero1">Primeiro número:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>

        <br><br>

        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao">
            <option value="somar">Somar (+)</option>
            <option value="subtrair">Subtrair (-)</option>
            <option value="multiplicar">Multiplicar (×)</option>
            <option value="dividir">Dividir (÷)</option>
        </select>

        <br><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>

        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <h2>Resultado: <?= $resultado ?></h2>
    <?php endif; ?>

    <?php if ($erro !== ""): ?>
        <p><?= $erro ?></p>
    <?php endif; ?>
</body>
</html>