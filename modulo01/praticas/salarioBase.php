<?php

$valorDoSalario = 2000;
$valorDaGratificacao = 0.05; //5%
$valorDoImposto = 0.07; //7%


//pode ser feito em menos linhas

$valorDaGratificacao = ($valorDoSalario * $valorDaGratificacao);

$valorDoImposto = $valorDoSalario * $valorDoImposto;

$salarioBase = ($valorDoSalario + $valorDaGratificacao) - $valorDoImposto ;



echo "valor da gratificação ".$valorDaGratificacao."<br><br>";

echo "valor do impposto ".$valorDoImposto."<br><br>";

echo "o salario base é de ".$salarioBase;