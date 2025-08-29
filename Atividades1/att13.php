<?php

function calcMedia($n1, $n2, $n3) {

    $media = ($n1 + $n2 + $n3) / 3;

    return $media;

}

echo "O resultado da média é: " . calcMedia(5, 7, 9);

?>