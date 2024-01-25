<?php

class Faculdade
{
    public string $nome;
    public array $disciplinas;

    public function __construct(string $nome, array $disciplinas)
    {
        $this->nome = $nome;
        $this->disciplinas = $disciplinas;
    }

}