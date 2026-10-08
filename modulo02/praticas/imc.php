<?php

$peso = 100;
$altura = 1.64;

$massaCorporal = $peso / ($altura * $altura);

switch($massaCorporal){

    case $massaCorporal < 26:
        echo "Peso normal";
        break;

    case $massaCorporal >= 26 && $massaCorporal < 30:
        echo "Obeso";
        break;

    case $massaCorporal > 30:
        echo "Obeso mórbido";
        break;

    default:
        "Opação inválida";
}


