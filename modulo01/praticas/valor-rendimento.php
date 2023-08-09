<?php
//algoritmo para calcular o valor total de um rendimento

$valorDeposito = 100;
$valorTaxaDeJuros = 0.2;

$valorRendimentoInicial = ($valorDeposito * $valorTaxaDeJuros)/100;

$valorRendimentoTotal = $valorRendimentoInicial + $valorDeposito;

echo "Valor depositado :".$valorDeposito."<br><br>";

echo "Valor da taxa de juros :".$valorTaxaDeJuros."<br><br>";

echo "Redimento Inicial :".$valorRendimentoInicial."<br><br>";

echo "Redimento Total :".$valorRendimentoTotal;






