<?php

class Cliente
{
    private string $nome;
    private string $email;
    private string $cpf;

    public function __construct(string $nome, string $email, string $cpf)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setCPF($cpf);
    }

    public function setEmail(string $email)
    {
        if (!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/', $email)) {
            throw new Exception("Email inválido. <br><br>");
        }

        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email . '<br><br>';
    }

    public function setCPF(string $cpf)
    {
        if (preg_match('/\D/', $cpf)) {
            throw new Exception("O CPF contém caracteres que não são números. <br><br>");
        }

        if (strlen($cpf) != 11) {
            throw new Exception("O CPF é muito grande. <br><br>");
        } 

        $this->cpf = $cpf;
    }

    public function getCPF(): string
    {
        return $this->cpf . '<br><br>';
    }

    public function infoCliente() 
    {
        echo "O cliente {$this->nome}, possui: <br> E-mail: {$this->email}<br>CPF: {$this->cpf}";
    }

    public function alterarEmail(string $novoEmail)
    {
        if (!ctype_lower($email)) {
            throw new Exception("Email inválido. <br><br>");
        }

        echo "E-mail alterado com sucesso! <br><br>";
        $this->email = $novoEmail;
    }
}   

try {
    $cliente1 = new Cliente("Marcos", "marcos@gmail.com", "13483093931");
    echo $cliente1->getEmail();
    echo $cliente1->getCPF();

    $cliente1->infoCliente();
} catch (Exception $e) {
    echo $e->getMessage();
}