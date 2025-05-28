<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Dobro e Triplo</title>
</head>
<body>
    <h2>Calculadora de Dobro e Triplo</h2>
    
    <form method="post">
        Digite um número: <input type="number" name="numero" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $dobro = $numero * 2;
        $triplo = $numero * 3;
        
        echo "<h3>Resultados:</h3>";
        echo "Número digitado: $numero<br>";
        echo "Dobro: $dobro<br>";
        echo "Triplo: $triplo";
    }
    ?>
</body>
</html>