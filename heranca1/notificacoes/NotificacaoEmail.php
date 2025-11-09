<?php

require_once "Notificacao.php";

class NotificacaoEmail extends Notificacao
{
    public function enviar(): string
    {
        return "E-mail enviado para {$this->destinatario} com a mensagem: {$this->mensagem}<br><br>";
    }
}