<?php

# Requisições
require_once "./classes/abstractPessoa.php";
require_once "./classes/aluno.php";
require_once "./classes/disciplina.php";
require_once "./classes/professor.php";
require_once "./classes/faculdade.php";

# Dados alunos: nome, idade, matricula, notas

$aluno_1 = new Aluno("Alberto Aistein", 54, 001, [9.1, 9.9, 8.0]);
$aluno_2 = new Aluno("Nicolas Telas", 77, 002, [8.7, 10.0, 8.0]);
$aluno_3 = new Aluno("Redy Lama", 19, 003, [7.9, 8.8, 9.5]);

# Dados professores: nome, idade, disciplina
$professor_1 = new Professor("Ada Louve Lince", 35, ["Ciência de Dados", "Internet das Coisas"]);
$professor_2 = new Professor("Isaque Neuto", 45, ["Física Avançada"]);

# Dados disciplinas: nome, cargaHoraria, professor, alunos
$disciplina_1 = new Disciplina("Ciência de Dados", 80.0, "Ada Louve Lince", [$aluno_2, $aluno_3]);
$disciplina_2 = new Disciplina("Internet das Coisas", 60.0, "Ada Louve Lince", [$aluno_2, $aluno_3]);
$disciplina_3 = new Disciplina("Física Avançada", 80.0, "Isaque Neuto", [$aluno_1, $aluno_2]);

#Dados da faculdade: nome, disciplinas
$faculdade = new Faculdade("UNISC", [$disciplina_1, $disciplina_2, $disciplina_3]);

file_put_contents("arquivo.json", json_encode($faculdade, JSON_PRETTY_PRINT));

# Impressões na tela
echo "ALUNOS:\n";
echo $aluno_1;
echo $aluno_2;
echo $aluno_3;
echo "PROFESSORES:\n";
echo $professor_1;
echo $professor_2;
echo "DISCIPLINAS:\n";
echo $disciplina_1;
echo $disciplina_2;
echo $disciplina_3;
// print_r($professor_1);
// print_r($professor_2);
// print_r($disciplina_1);
// print_r($disciplina_2);
// print_r($disciplina_3);