<?php

require_once "aluno.php";
require_once "professor.php";

class Disciplina // Com professor 1:1. Com aluno 0:n
{
    protected string $nome;
    protected float $cargaHoraria;
    protected string $professor;
    protected array $alunos; // Array obj. alunos

    public function __construct(string $nome, float $cargaHoraria, string $professor, array $alunos)
    {
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->professor = $professor;
        $this->alunos = $alunos;
    }

    # Função para impressão de disciplinas
    public function __toString() {
        $alunosArray = '';
        #$alunosArray = implode($this->alunos);
        foreach ($this->alunos as $i => $aluno) {
            $alunosArray .= "Aluno " . ($i + 1) . ": \n" . $aluno;
        }
        return "Nome: {$this->nome},\nCarga horária: {$this->cargaHoraria} horas\nProfessor: {$this->professor}\nAlunos:\n{$alunosArray}";
    }
}