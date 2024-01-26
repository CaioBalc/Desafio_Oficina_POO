<?php

class Faculdade
{
    protected string $nome;
    protected array $disciplinas;

    public function __construct(string $nome, array $disciplinas)
    {
        $this->nome = $nome;
        $this->disciplinas = $disciplinas;
    }

}