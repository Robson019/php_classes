<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX02 - Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CALCULADORA</h1>
    <form id="calculator_form" action="calculate.php" method="post">
        <input type="number" name="first_value" id="first_value" required>
        <input type="number" name="second_value" id="second_value" required>
        <select name="operation" id="operation" required>
            <option value="" disabled selected>Operação</option>
            <option value="sum">Somar</option>
            <option value="subtration">Subtrair</option>
            <option value="multiplication">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>
        <input type="submit" value="calcular" onclick="calculate()">
    </form>
    <p>Resultado:</p>
    <?php
        print_r($_SESSION['resp']);
    ?>
</body>
</html>