<?php

function contar($lista) {

    $cont = count($lista);
    return $cont;

}

$l = ['uva', 'maçã', 'banana', 'morango'];
echo "Sua lista possui " . contar($l) . " itens."

?>