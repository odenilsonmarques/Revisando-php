<?php
// 1º Pedro comprou um saco de racao com peso em quilos

// 2º Ele possui dois gato. Para os quais fornece a quantidade de ração em gramas

// 3º A quantidade diaria de ração fornecida para cada gato é sempre a mesma

// 4º Faça um algoritmo que receba o peso do saco da ração e a quantidade de ração fornecida para cada gato.

// 5º Calcule e mostre quanto restará de ração no saco após 5 dias


$pesoDoSacoDaRacao = 3;

$qtdDeracaoParaGatoViralata = 20;

$qtdDeracaoParaGatoDeRaca = 20;

$dias = 5;


//convertendo quilos para gramas
$convertendoQuilosParaGramas = $pesoDoSacoDaRacao * 1000;

//total de racao por dia
$totalDeRacaoPorDia = ($qtdDeracaoParaGatoViralata + $qtdDeracaoParaGatoDeRaca) * $dias;

//total que sobrou da ração após os dias
$totalDaSobraDeRacaoAposCincoDias = ($convertendoQuilosParaGramas - $totalDeRacaoPorDia);

echo "peso do saco da ração em gramas ".$convertendoQuilosParaGramas." que vale a ". $pesoDoSacoDaRacao." Quilo <br><br>";

echo "quantidade de ração em gramas para o gato viralata ".$qtdDeracaoParaGatoViralata."<br><br>";

echo "quantidade de ração em gramas para o gato de raca ".$qtdDeracaoParaGatoDeRaca."<br><br>";

echo "total de ração que sobrou após cinco dias de consumo ".$totalDaSobraDeRacaoAposCincoDias." gramas";



