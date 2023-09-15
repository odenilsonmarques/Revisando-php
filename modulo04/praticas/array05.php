<?php

$numerosPares = [
    1,
    2,
    3,
    4,
    5
];

$cont = 0;
var_dump($numerosPares);

echo'<h1>Números pares</h1>';
echo'<ul>';
foreach ($numerosPares as $numerosPare){
    if ($numerosPare % 2 == 0){
        
        echo"<li>{$numerosPare}</li>";
        $cont ++;
    }
}


echo'</ul>';

echo "<p>Total de números pares: $cont</p>";


