<?php

class Notificacao
{
    protected $destinatario;
    protected $mensagem;

    public function __construct(string $destinatario, string $mensagem)
    {
        $this->setDestinatario($destinatario);
        $this->setMensagem($mensagem);
    }

    public function setDestinatario(string $destinatario)
    {
        if (empty($destinatario)) {
            return "O destinarário não foi informado.";
        }

        $this->destinatario = $destinatario;
    }

    public function getDestinatario(): string
    {
        return $this->destinatario;
    }

    public function setMensagem(string $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    public function enviar(): string
    {
        return "Enviado para {$this->destinatario} com a mensagem: {$this->mensagem}<br>";
    }
}