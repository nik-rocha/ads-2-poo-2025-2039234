<?php

$aluno = "Jonas";

$nota1 = readline("Digite a 1ª nota do ".$aluno.": ");
$nota2 = readline("Digite a 2ª nota do ".$aluno.": ");
$nota3 = readline("Digite a 3ª nota do ".$aluno.": ");

function calcularMedia($n1, $n2, $n3) {

    $media = ($n1 + $n2 + $n3) / 3;
    return $media;

}

function resultadoAluno($nome, $n1, $n2, $n3) {

    $media = calcularMedia($n1, $n2, $n3);

    if($media >= 7) {
        echo "O aluno $nome obteve média de $media e está aprovado.";
    } elseif($media >= 4) {
        echo "O aluno $nome obteve média de $media e está de recuperação.";
    } else {
        echo "O aluno $nome obteve média de $media e está reprovado.";
    }

}

resultadoAluno($aluno, $nota1, $nota2, $nota3)

?>