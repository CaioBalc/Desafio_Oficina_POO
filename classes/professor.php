<?php

class Professor extends AbstractPessoa// Com disciplina 1:n. 
{
    protected array $disciplinas; // Array obj. disciplina

    public function __construct(string $nome, int $idade, array $disciplina)
    {
        parent::__construct($nome, $idade, $disciplina);
        $this->disciplinas = $disciplina;
    }

    # Função para impressão de professores
    public function __toString() {
        $disciplinasArray = implode(', ', $this->disciplinas);
        return "Nome: {$this->nome},\nIdade: {$this->idade} anos\nDisciplinas: {$disciplinasArray}\n\n";
    }
}