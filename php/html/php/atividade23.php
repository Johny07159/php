<?php

$salario = 2000.00;
$aumento = $salario * 0.30;
$novoSalario = $salario + $aumento;

echo "Salário original: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Aumento de 30%: R$ " . number_format($aumento, 2, ',', '.') . "<br>";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.');
?>
