<?php

$operacao = 'divisao';
$primeiroValor = 2;
$segundoValor = 1;

switch ($operacao) {

    case 'soma':
        echo "A soma da operação é: " . ($primeiroValor + $segundoValor);
        break;

    case 'subtracao':
        echo "A subtração da operação é: " . ($primeiroValor - $segundoValor);
        break;

    case 'multiplicacao':
        echo "A multiplicação da operação é: " . ($primeiroValor * $segundoValor);
        break;

    case 'divisao':
        echo "A divisão da operação é: " . ($primeiroValor / $segundoValor);
        break;

    default:
        echo "Operação inválida !";
}
