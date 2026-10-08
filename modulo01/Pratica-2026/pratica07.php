<?php

$precoDeFabricaDoVeiculo = 200.000;
$percentualDeLucroDoDistribuidor = 0.2;
$percentualDeImpostos = 0.1;

$lucroDoDistribuidor = ($precoDeFabricaDoVeiculo * $percentualDeLucroDoDistribuidor) / 100;

$valorDosImpostos = ($precoDeFabricaDoVeiculo * $percentualDeImpostos) / 100;

$precoFinalVeiculo = $precoDeFabricaDoVeiculo + $lucroDoDistribuidor + $valorDosImpostos;

echo "Preços dos nossos veiculos <br><br>";

echo "Lucro do distribuidor ".$lucroDoDistribuidor."<br><br>";

echo "Valor dos impostos ".$valorDosImpostos."<br><br>";

echo "preco final do veículo ".$precoFinalVeiculo."<br><br>";





