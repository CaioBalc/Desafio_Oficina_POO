<?php

class Aluno extends AbstractPessoa // Com disciplina 1:n
{
    protected int $matricula;
    protected array $notas; // Array float
    
    public function __construct(string $nome, int $idade, int $matricula, array $notas = [])
    {
        parent::__construct($nome, $idade, $matricula, $notas);
        $this->matricula = $matricula;
        $this->notas = $notas; 
    }

    # Função para impressão de alunos
    public function __toString() {
        $notasArray = implode(', ', $this->notas);
        return "Nome: {$this->nome},\nIdade: {$this->idade} anos\nMatrícula: {$this->matricula}\nNotas: {$notasArray}\n\n";
    }
}