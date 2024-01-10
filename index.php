<?php require "conversor.php" ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <form action="conversor.php" method="get">
        <label for="valor">
            <p>Digite o valor:</p>
            <input type="number" step="0.01" name="valor">
        </label>
        <label for="moeda">
            <p>Digite "1" para converter para Real e "2" para Dolar</p>
            <input type="number" name="moeda">
        </label>
        <br>
        <br>
        <button>Converter</button>
    </form>
</body>
</html>