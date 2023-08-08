<?php

// Operadores de Incremento (++) e decremento (--):

/*
    - O operador de incremento é usado para aumentar o valor de uma variável em 1

     Ele pode ser aplicado de duas maneiras:

    - Pré-incremento: Nesse caso, o valor da variável é aumentado antes de qualquer outra operação ser realizada. Sua sintaxe é ++$variavel. 

    - Pós-incremento: Aqui, o valor da variável é aumentado após a execução da operação atual. Sua sintaxe é $variavel++. 

*/
    
// Exemplo: Pré-incremento
$numero = 5;
echo "usando o pré - incremento " . ++$numero."<br>"; // Output: 6


// Exemplo: Pós-incremento
$numero = 5;
echo "inicia com valor declarado " . $numero++; // Output: 5
echo " depois incrementa mais um  ". $numero."<br>";   // Output: 6



/*
    - O operador de decremento é usado para diminuir o valor de uma variável em 1

     Ele pode ser aplicado de duas maneiras:

    - Pré-incremento: Nesse caso, o valor da variável é diminuído antes de qualquer outra operação ser realizada. Sua sintaxe é --$variavel. 

    - Pós-incremento: Aqui, o valor da variável é diminuido após a execução da operação atual. Sua sintaxe é $variavel--. 

*/
    
// Exemplo: Pré-decremento
$numero = 8;
echo "usando o pré - incremento " . --$numero."<br>"; // Output: 7


// Exemplo: Pós-decremento
$numero = 8;
echo "inicia com valor declarado " .$numero--; // Output: 8
echo " depois decrementa um  " .$numero."<br><br><br>";   // Output: 7







$salario = 2000;

echo "Seu salário e: ".$salario."<br>";

// echo $salario = $salario + 200;


// forma mais simples de fazer
echo "salario com o incremento".($salario += 200)."<br>";


echo "salario com decremento ".$salario -= 10;


