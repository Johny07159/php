<!DOCTYPE html>
<html>
<head>
    <title>Aumento Salarial</title>
</head>
<body>
    <h2>Calculadora de Aumento Salarial</h2>
    
    <form method="post">
        Salário: <input type="number" name="salario" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $salario = $_POST["salario"];
        $aumento = $salario * 1.30;
        echo "<p>Novo salário: R$ " . number_format($aumento, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>