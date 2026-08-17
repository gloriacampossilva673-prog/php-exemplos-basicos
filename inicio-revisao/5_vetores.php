<?php

// Vetor (array simples)
$frutas = ["Maça ", "Banana",  "Uva"];

// Exibir (Usando laço)
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta \n";
}

 // Matriz (array completo "Linhas e colunas) 
 $matriz = [
    ["Max Verstappen", "Lando Norris", "Oscar Piastri"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russell"],
    ["Fernando Alonso", "Carlos Sainz", "Ayrton Senna"]
 ];
 
 // Exibindo  nome dos pilotos
 echo "\n";
 echo "Melhores pilotos da F1: \n";
 foreach ($matriz as $linhas) {
    foreach ($linhas as $piloto) {
        echo $piloto . " | ";
    }
    echo "\n";
 }