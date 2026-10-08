<?php

// Operadores de Incremento (++) e decremento (--):

/*
    - O operador de incremento é usado para aumentar o valor de uma variável em 1

     Ele pode ser aplicado de duas maneiras:

    - Pré-incremento: Nesse caso, o valor da variável é aumentado antes de qualquer outra operação ser realizada. Sua sintaxe é ++$variavel. 

    - Pós-incremento: Aqui, o valor da variável é aumentado após a execução da operação atual. Sua sintaxe é $variavel++. 

*/


//exemplo pré-incremento
$numeroPreIncremento = 5;
echo"valor inicial ".$numeroPreIncremento."<br>";
echo"valor aṕos o operador pre-incremento ". ++$numeroPreIncremento."<br><br><br>";

//exemplo pós-incremento
$numeroPosIncremento = 4;
echo "inicia com valor declarado " . $numeroPosIncremento++ ."<br>"; // Output: 4
echo " depois incrementa mais um  ". $numeroPosIncremento."<br><br><br>";   // Output: 5



/*
    - O operador de decremento é usado para diminuir o valor de uma variável em 1 ele pode ser aplicado de duas maneiras:

    - Pré-incremento: Nesse caso, o valor da variável é diminuído antes de qualquer outra operação ser realizada. Sua sintaxe é --$variavel. 

    - Pós-incremento: Aqui, o valor da variável é diminuido após a execução da operação atual. Sua sintaxe é $variavel--. 

*/

// Exemplo: Pré-decremento
$numero = 8;
echo "usando o pré - incremento " . --$numero."<br><br>"; // Output: 7


// Exemplo: Pós-decremento
$numero = 8;
echo "usando o pos-decremento <br><br>";
echo "inicia com valor declarado " .$numero-- ."<br><br>"; // Output: 8
echo " depois decrementa um  " .$numero."<br><br><br>";   // Output: 7


echo"Formas de usar os operadores de incremento e decremento<br><br>";
$salario = 3000;
echo"O valor do salário atual é ".$salario."<br><br>";
echo "primeira forma ".$salario + 200;

echo"<br>";
// forma mais simples de fazer
echo "salario com o incremento".($salario += 200)."<br>";


echo "salario com decremento ".$salario -= 10;

