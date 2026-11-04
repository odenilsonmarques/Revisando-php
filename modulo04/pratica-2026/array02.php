<?php

$frutas = [
    'Laranja',
    'Melancia',
    'Abacate',
    'Banana'
];

//Adicionando um elemento ao array sem definir a posição. Nesse caso este é adicionado no fim do array
$frutas[] = 'Tangerina';


// Lembrando, o php não obriga o desenvolvedor a seguir um indice após o outro, o programador pode definir a posição do indice, 
// e alem disso os outros elementos que não foram definido não existem

//adicionando elemento em uma posição especifica no array. 
$frutas[7] = 'Maçã';

echo "<pre>";
    var_dump($frutas);
echo "</pre>";


