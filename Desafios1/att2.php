<?php

$assentos = [
    [1, 0, 0, 1, 1],
    [1, 1, 1, 1, 0],
    [0, 1, 1, 1, 1],
    [1, 1, 1, 1, 1] 
];


$assentosDisponiveis = 0;
$lVaziaMaior = 0;
$cVaziaMaior = 0;
foreach($assentos as $i => $linha) {
    foreach($linha as $j => $assento) {
        if($assento == 0) {
            $assentosDisponiveis += 1;
            
            if($assentosDisponiveis == 1) {
                $lVaziaMaior = $i + 1;
                $cVaziaMaior = $j + 1;
            }
        }
    }
}

echo "Existem $assentosDisponiveis assentos disponíveis.\n";
echo "O primeiro assento disponível está em ($lVaziaMaior, $cVaziaMaior)"

?>