<?php

$estoque = [
    [2, 5, 3],
    [1, 0, 4],
    [7, 2, 1]
];

$total = 0;
$maior = 0;
$lmaior = 0;
$cmaior = 0;
foreach($estoque as $i => $linha) {
    foreach($linha as $j => $item) {
        $total += $item;

        if($item > $maior) {
            $maior = $item;
            $lmaior = $i + 1;
            $cmaior = $j + 1;
        }
    }
}

echo "Total de produtos: ".$total."\n";
echo "Maior quantidade: $maior na posição ({$lmaior}, {$cmaior})"

?>