<?php

require_once "Notificacao.php";

class NotificacaoPush extends Notificacao
{
    public function enviar(): string
    {
        return "Notificação enviada por push para {$this->destinatario} com a mensagem: {$this->mensagem}<br><br>";
    }
}