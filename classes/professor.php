<?php

class Professor extends AbstractPessoa// Com disciplina 1:n. 
{
    public array $disciplina; // Array obj. disciplina

    public function __construct(string $nome, int $idade, array $disciplina)
    {
        parent::__construct($nome, $idade, $disciplina);
        $this->disciplina = $disciplina;
    }

    # Função para impressão de professores
    public function __toString() {
        $disciplinasArray = implode(', ', $this->disciplina);
        return "Nome: {$this->nome},\nIdade: {$this->idade} anos\nDisciplinas: {$disciplinasArray}\n\n";
    }
}