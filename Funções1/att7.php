<?php

function verify($nota) {

    if($nota >= 7) {
        echo "Aprovado";
    } elseif($nota >= 5) {
        echo "Recuperação";
    } else {
        echo "Reprovado";
    }

}

$n = readline("Digite a nota do aluno: ");
verify($n)

?>