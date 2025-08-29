<?php

$numList = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numPares = [];
$numImpares = [];

function numDivide($num, &$pares, &$impares) {

    foreach ($num as $nums) {
        if ($nums % 2 == 0) {
            $pares[] = $nums;
        } else {
            $impares[] = $nums;
        }
    }
}

numDivide($numList, $numPares, $numImpares);

echo "Sua lista dividida por pares é: " . implode(", ", $numPares);
echo "\nSua lista dividida por ímpares é: " . implode(", ", $numImpares)

?>