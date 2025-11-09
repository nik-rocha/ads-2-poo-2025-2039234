<?php

require_once "Notificacao.php";
require_once "NotificacaoEmail.php";
require_once "NotificacaoSMS.php";
require_once "NotificacaoPush.php";

$notLista = [
    $not1 = new NotificacaoEmail("nicollasrocha320@gmail.com", "Eaí chefe, vai devolver quando? A cobrança tá marcada ainda!"),

    $not2 = new NotificacaoSMS("+5514997346185", "Sua linha foi cancelada por falta de pagamento. Já se passaram 36 meses."),

    $not3 = new NotificacaoPush("Nicollas123", "Erro: o banco de dados de sua empresa foi deletado."),
];

foreach($notLista as $not) {
    echo $not->enviar();
}