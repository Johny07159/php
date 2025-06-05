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
    
    $numero_2 = 2;

    $numero_3 = 3;

    $resultado_1 = $numero_1 * $numero_2 ;

    
    $resultado_2 = $numero_1 * $numero_3 ;


  echo "<p> O Dobro sera : $resultado_1 </p><br>";
 
    
    echo "<p> O Triplo sera : .$resultado_2 </p><br>";

    ?>


</body>
</html>