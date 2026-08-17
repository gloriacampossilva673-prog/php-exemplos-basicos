<?php

// Criação das variáveis
$idade = 19;
$temDocumento = false;

// Estrutura de decisão (Operador E)
if ($idade >= 18 && $temDocumento == true) {
    echo "Pode tirar a carteira";
} else {
    echo "Não pode tirar a carteira";
}

// Estrutura de decisão (Operador OU)
if ($idade >= 18 || $temDocumento == true) {
    echo "\n Pode tirar a carteira";
} else {
    echo "Não pode tirar a carteira";
}

// Operador de negação

$presente = false;

if (!$presente) {
    echo "\n O aluno está ausente";
} else {
    echo "\n O aluno está presente";
}
