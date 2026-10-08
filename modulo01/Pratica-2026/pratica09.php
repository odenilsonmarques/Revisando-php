<?php

// Faça um algoritmo que leia

// 1º O nome do piloto

// 2º uma distancia percorrida em km

// 3º O tempo que levou par percorrer

// velocidade = distancia / tempo


$nomeDoPiloto = "Odenilson";

$distanciaPercorridaEmKM = 5 * 1000;

$tempoEmMinutos = 5;

// Convertendo minutos para horas
$tempoEmHoras = $tempoEmMinutos / 60;

$velocidadeMedia = $distanciaPercorridaEmKM / $tempoEmHoras;

echo "A velocidade média do piloto, {$nomeDoPiloto}, foi {$velocidadeMedia} km/h";
 