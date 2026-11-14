<?php

$numerosPares = [
    1,
    2,
    3,
    4,
    5,
    6
];

$cont = 0;

echo '<h1>Números pares</h1>';

echo '<ul>';
foreach ($numerosPares as $numerosPar) {
    if($numerosPar % 2 == 0){
        echo"<li>{$numerosPar}</li>";
        $cont ++;
    }
}

echo '</ul>';

echo "Total de números pares: {$cont}";
