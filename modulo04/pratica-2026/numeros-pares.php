<?php

$numeros = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
];

$contPar = 0;
$contImpar = 0;

echo'<pre>';
 var_dump($numeros);
 echo '</pre>';


 echo'<ul>';

foreach($numeros as $numeros){
    if($numeros % 2 == 0){
        echo"<li>{$numeros} é Par </li>";
        $contPar++;
    }
    else{   
        echo "<li>{$numeros} é impar</li>";
        $contImpar++;
    }
}
echo "<p>Total de números pares: $contPar</p>";
echo "<p>Total de números ímpares: $contImpar</p>";

echo'</ul>';