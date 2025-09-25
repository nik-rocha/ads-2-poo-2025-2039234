<?php

function limiteIdade($idade) {

    if($idade > 18) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }
}

$verificaIdade = readline("Qual a sua idade?: ");
limiteIdade($verificaIdade);

?>