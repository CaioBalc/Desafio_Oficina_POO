<?php

class Professor extends AbstractPessoa// Com disciplina 1:n. 
{
    public function __construct(string $nome, int $idade, array $disciplina)
    {
        parent::__construct($nome, $idade, $disciplina);
        $this->disciplina = $disciplina;
    }

    public array $disciplina; // Array obj. disciplina
}