<?php

// $cambioDolar = 2.28;
// $cambioEuro = 2.43;
$cambioPeso = 1.50;

$valorEmReal = 1;
$novoValorEmReal;

switch($cambioPeso){
    case $cambioDolar:
         echo "O valor da moeda de destino é: ".$novoValorEmReal = $valorEmReal * $cambioDolar;
         break;

    case $cambioEuro:
        echo "O valor da moeda de destino é: ".$novoValorEmReal = $valorEmReal * $cambioEuro;
        break;

    case $cambioPeso:
        echo "O valor da moeda de destino é: ".$novoValorEmReal = $valorEmReal * $cambioPeso;
        break;
    
    default:
        echo "Opção inválida !";
}