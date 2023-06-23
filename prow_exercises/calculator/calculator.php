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
        <h3>DIGITE OS VALORES</h3>
        <input type="number" name="first_value" id="first_value" placeholder="1º VALOR" required>
        <input type="number" name="second_value" id="second_value" placeholder="2º VALOR" required><br/>
        <select name="operation" id="operation" required>
            <option value="" disabled selected>OPERAÇÃO</option>
            <option value="sum">SOMAR</option>
            <option value="subtration">SUBTRAIR</option>
            <option value="multiplication">MULTIPLICAR</option>
            <option value="division">DIVIDIR</option>
        </select>
        <input type="submit" value="CALCULAR" onclick="showResult()">
        <p id="p_resp" class="hide">RESULTADO: 
            <?php
                print_r($_SESSION['resp']);
            ?>
        </p>
    </form>
</body>
<script src="main.js"></script>
</html>