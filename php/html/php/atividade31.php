<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>


     <?php 

    $numero_1 = $_GET['numero_1'];
    
    $numero_2 = $_GET['numero_2'];

    $numero_3 = $_GET['numero_3'];
    
    $numero_4 = $_GET['numero_4'];

    $numero_5 = $_GET['numero_5'];

    $resultado = $numero_1 * $numero_2 * $numero_3 * $numero_4 * $numero_5;

    echo 'O Resultado sera :' .$resultado;

    ?>


</body>
</html>