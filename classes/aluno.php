<?php

class Aluno extends AbstractPessoa // Com disciplina 1:n
{
    public function __construct(string $nome, int $idade, int $matricula, array $notas = [])
    {
        parent::__construct($nome, $idade, $matricula, $notas);
        $this->matricula = $matricula;
        $this->notas = $notas; 
    }

    public int $matricula;
    public array $notas; // Array float
}