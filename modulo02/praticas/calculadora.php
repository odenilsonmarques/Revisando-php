<?php

//Nota: o valor passado no switch tem que conter algum valor, ou passar uma string

$operacao = 'divisao';
$primeiroNumero = 2;
$segundoNumero = 3;

switch($operacao){
    
    case 'soma':
        echo "O soma dos valores é: ".($primeiroNumero + $segundoNumero);
        break;

    case 'subtracao':
        echo "A subtração dos valores é: ".($primeiroNumero - $segundoNumero);
        break;

    case 'multiplicacao':
        echo "A multiplicacao dos valores é: ".($primeiroNumero * $segundoNumero);
        break;

    case 'divisao':
        echo "A divisao dos valores é: ".($primeiroNumero / $segundoNumero);
        break;

    default:
        echo "Opção inválida !";
}