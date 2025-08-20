<?php

$grade = readline("Diga sua nota da prova de 0 a 10: ");

if($grade >= 7) {
    echo "Aprovado";
} elseif($grade >= 5 and $grade < 7) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}

?>