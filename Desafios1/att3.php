<?php

$sudoku = [
    [2, 9, 4],
    [7, 5, 3],
    [6, 1, 8]
];

$sdk = [];
foreach($sudoku as $linha) {
    foreach($linha as $elemento) {
        $skd[] = $elemento;
    }
}

if(count($sdk) !== count(array_unique($sdk))) {
    echo "Sudoku incorreto!";
} else {
    echo "Sudoku correto!";
}

?>