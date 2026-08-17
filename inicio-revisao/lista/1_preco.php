<?php
$preco = 50;
$quantidade = 5;

$total = $preco * $quantidade;

if ($total >= 200) {
    $desconto = $total * 0.10;
    $totalFinal = $total - $desconto;

    echo "Valor total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Desconto de 10%: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor final: R$ " . number_format($totalFinal, 2, ',', '.');
} else {
    echo "Valor total: R$ " . $total . "<br>";
    echo "Sem desconto.";
}
?>
