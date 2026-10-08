<?php

$animais = [
    'Cachorro',
    'Gato',
    'Cavalo',
    'Galinha',
    'Coelho'
];

echo '<pre>';
var_dump($animais);
echo '</pre>';



//acessando o elemento pela posição
echo "acessando o elemento pela posição. O animal é {$animais[3]}<br><br><br>";

echo'adicionando um elemento ao array<br>';
//adicionando um elementp ao array. Lembrando que podemos adiccionar uma posição especifica ou não
$animais [] = 'Peixe';

echo'<pre>';
var_dump($animais);
echo'</pre>';


