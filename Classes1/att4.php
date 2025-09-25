<?php

class Livro
{
    public string $titulo;
    public string $autor;
    public int $paginas;

    public function __construct(string $titulo, string $autor, int $paginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function exibirResumo(): string
    {
        return "Título do livro: {$this->titulo}<br> Autor do livro: {$this->autor}";
    }

    public function quantidadePaginas(): string
    {
        return "<br> Quantidade de páginas: {$this->paginas}";
    }
}

$livro = new Livro("1984", "George Orwell", 336);
echo $livro->exibirResumo();
echo $livro->quantidadePaginas();