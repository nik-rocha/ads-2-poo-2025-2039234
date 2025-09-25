<?php

class Livro
{
    public string $titulo;
    public int $paginas;
    public int $paginasLidas;

    public function __construct(string $titulo, int $paginas)
    {
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->paginasLidas = 0;
    }

    public function verificarProgresso()
    {
        if ($this->paginasLidas > $this->paginas) {
            $this->paginasLidas = $this->paginas;
            return ($this->paginasLidas / $this->paginas) * 100;
        } else {
            return ($this->paginasLidas / $this->paginas) * 100;
        }
    }
}

$livro1 = new Livro("Dom Casmurro", 350);
$livro1->paginasLidas = 150;
echo number_format($livro1->verificarProgresso(), 2, ',', '')."%";