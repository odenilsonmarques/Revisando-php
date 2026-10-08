<?php

$altura = 1.68;
$sexo = "F";
$nome = "Odenilson marques";

// Verificar e imprimir o tipo de cada variável
echo "Tipo de \$altura: " . gettype($altura) . "<br>";
echo "Tipo de \$sexo: " . gettype($sexo) . "<br>";
echo "Tipo de \$nome: " . gettype($nome) . "<br>";

if ($sexo == "M") {
    $pesoIdeal = (72.7 * $altura) - 58;
    echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";
} else if ($sexo == "F") {
    $pesoIdeal = (62.1 * $altura) - 44.7;
    echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";
} else {
    echo "Informe o tipo de sexo";
}
