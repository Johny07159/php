<?php

$media = 8.3;

if ($media < 0 || $media > 10) {
    echo "Nota inválida.";
} elseif ($media < 4) {
    echo "Nota: $media - Situação: Reprovado com desempenho insuficiente.";
} elseif ($media >= 4 && $media <= 5.9) {
    echo "Nota: $media - Situação: Recuperação - precisa melhorar.";
} elseif ($media >= 6 && $media <= 7.9) {
    echo "Nota: $media - Situação: Aprovado com desempenho regular.";
} elseif ($media >= 8 && $media <= 9.4) {
    echo "Nota: $media - Situação: Aprovado com bom desempenho.";
} else {
    echo "Nota: $media - Situação: Aprovado com excelência!";
}
?>
