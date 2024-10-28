<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Três Valores</title>
</head>
<body>
    <h2>Cálculo da Média de Três Valores</h2>
    <form method="post" action="">
        <input type="number" name="valor1" placeholder="Digite o primeiro valor" step="0.01" required><br>
        <input type="number" name="valor2" placeholder="Digite o segundo valor" step="0.01" required><br>
        <input type="number" name="valor3" placeholder="Digite o terceiro valor" step="0.01" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = floatval($_POST['valor1']);
        $valor2 = floatval($_POST['valor2']);
        $valor3 = floatval($_POST['valor3']);

        // Calculando a média
        $media = ($valor1 + $valor2 + $valor3) / 3;

        // Verificação da média
        if ($media >= 7) {
            echo "<p>A média dos valores é: $media. Está acima do esperado!</p>";
        } else {
            echo "<p>A média dos valores é: $media. Está abaixo do esperado.</p>";
        }
    }
    ?>
</body>
</html>
