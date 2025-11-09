<?php

require_once "Notificacao.php";

class NotificacaoSMS extends Notificacao
{
    public function enviar(): string
    {
        return "SMS enviado para {$this->destinatario} com a mensagem: {$this->mensagem}<br><br>";
    }
}