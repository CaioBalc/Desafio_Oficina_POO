<?php

require_once "aluno.php";
require_once "professor.php";

class Disciplina // Com professor 1:1. Com aluno 0:n
{
public function __construct(string $nome, float $cargaHoraria, string $professor, array $alunos)
{
    $this->nome = $nome;
    $this->cargaHoraria = $cargaHoraria;
    $this->professor = $professor;
    $this->alunos = $alunos;
}

    public string $nome;
    public float $cargaHoraria;
    public string $professor;
    public array $alunos; // Array obj. alunos
}