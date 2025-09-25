<?php

class Carro 
{

    public string $marca;
    public string $modelo;
    public string $ano;

    public function __construct(string $marca, string $modelo, string $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInformacoes(): string
    {
        return "O carro guardado é um {$this->marca} {$this->modelo} do ano {$this->ano}";
    }
}

$carroGuardado = new Carro("Nissan", "Altima", "2025");
echo $carroGuardado->exibirInformacoes();