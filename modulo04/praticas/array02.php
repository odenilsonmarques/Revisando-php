<?php

$frutas = [

    'Laranja',
    'Banana',
    'Abacaxi'
];

// adicionando elemento ao array
$frutas [] = 'Tangerina';

// Lembrando, o php não obriga o desenvolvedor a seguir um indice após o outro, o programador pode definir a posição do indice, 
// e alem disso os outros elementos que não foram definido não exitem

//adicionando elemento em uma posição especifica no array. 
$frutas [10] = 'Goiaba';

var_dump($frutas);

?>



<ul>
    <li><?php echo $frutas[0] ?></li>
    <li><?php echo $frutas[1] ?></li>
    <li><?php echo $frutas[2] ?></li>
</ul>